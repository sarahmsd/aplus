import { useEffect, useState } from "react";
import Navbar from "./Navbar";
import Sidebar from "./Sidebar";
import axios from "axios";

function Enseignements({onlinepage}) {    
    const [enseignements, setEnseignements] = useState([]);
    const [ecoleEns, setEcoleEns] = useState([]);
    const [ensCycles, setEnsCycles] = useState([]);
    const [cycles, setCycles] = useState([]);    
    const [cycle, setCycle] = useState([]);
    const [checkboxes, setCheckboxes] = useState([]);
    const ecole = JSON.parse(localStorage.getItem("profil"));

    const handleCycle = (e) => {
        const value = e.target.value;
        const updatedCycles = cycles.map((c) => 
            c.id == value ? { ...c, checked: !c.checked } : c
        );
        setCycles(updatedCycles);      
    }

    const showModif = (ens_id) => {
        let ens = document.getElementById(`ens-${ens_id}`);
        let childs = ens.childNodes;
        let input = '';
        childs.forEach(child => {
            input = child.firstElementChild;
            input.classList.contains('hidden') ? input.classList.remove('hidden') : input.classList.add('hidden')
        });        
    }

    const getData = () => {
        axios.get(`/api/config_enseignements/${ecole.id}`)
            .then((response) => {
                setEnseignements(response.data.enseignements);
                setEcoleEns(response.data.ecoleEns);
                setCycles(response.data.cycles);
                response.data.ecoleEns.forEach(eens => {
                    setEnsCycles([
                        ...ensCycles,
                        eens.cycles
                    ]);
                });
            }).catch((error) => console.log('error', error))
    };

    useEffect(() => {
        getData();
    }, []);
    
    return (
        <div className="grid">
            <Navbar sigle="ISI" ecole="Institut Supérieur d'Informatique" />
            <div className="flex flex-row w-[100%]">
                <Sidebar actif="departements" />
                <div className="relative left-[10%] px-12 py-4 w-[80%] mx-auto">
                <div className="flex justify-between">
                    <div className="mb-7">
                        <h1 className="text-2xl font-semibold m-0">
                            Enseignements
                        </h1>
                        <span className="text-md font-light tracking-[.10em] m-0">
                            Liste des enseignements
                        </span>
                    </div>
                    <div className="">
                        <button
                            className="border-2 border-main-blue rounded-full text-main-blue px-8 py-2 mr-4"
                            onClick={(e) =>
                                (window.location.href =
                                    "/api/dashboard")
                            }
                        >
                            Dashboard
                        </button>
                        <button 
                            className="border-2 border-yellow rounded-full text-yellow px-8 py-2"
                            onClick={onlinepage}
                        >
                            Voir ma page en ligne
                        </button>
                    </div>
                </div>
                {enseignements && enseignements.map((ens) => (
                    ens.systemeEducatif_id == ecole.systemeEducatif_id && (
                        <div key={ens.id} className="group grid gap-4 bg-white rounded py-4 px-8 mb-4">
                            <div className="flex justify-between">
                                <div className="grid">
                                    <h3 className="text-[#0B2242] text-[20px]">
                                        {ens.enseignement}
                                    </h3>
                                    <p className="text-text">
                                        Les cycles de l'enseignement {ens.enseignement}
                                    </p>
                                </div>
                                <span className="hidden group-hover:block" onClick={() => showModif(ens.id)}>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512"
                                        className="w-4 h-4 fill-main-blue"
                                    >
                                        <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                                    </svg>
                                </span>
                            </div>
                            <div className="flex flex-wrap justify-auto gap-4" id={`ens-${ens.id}`}>
                                {cycles && cycles.map((cycle) => (                                    
                                    cycle.enseignement_id == ens.id &&
                                    (                                        
                                        <span key={cycle.id} className="border border-slate-200 py-2 px-8 rounded-full">
                                            {ensCycles && ensCycles.map((ec) => (
                                                ec.some(obj => obj.cycle_id === cycle.id) ? cycle.checked = true : cycle.checked = false                                                                                        
                                            ))}
                                            {cycle.cycle}
                                            <input type="checkbox" className="hidden rounded-full p-2 ml-2" id={cycle.id} name="cycle" value={cycle.id} onChange={handleCycle} checked={cycle.checked}  />
                                        </span>
                                    )
                                ))}
                            </div>
                        </div>
                    )
                ))}                  
                </div>
            </div>
        </div>
    );
}

export default Enseignements;
