import { useEffect, useState } from "react";
import Menu from "../Menu";
import axios from "axios";
import { error } from "jquery";

function Configuration () {
    const [sEduc, setSEduc] = useState('');
    const [enseignement, setEnseignement] = useState([]);
    const [cycle, setCycle] = useState([]);
    const [sEducs, setSEducs] = useState([]);
    const [enseignements, setEnseignements] = useState([]);
    const [cycles, setCycles] = useState([]);
    const ecole = JSON.parse(localStorage.getItem("profil"));

    const getConfigData = () => {
        axios.get('/api/configData')
            .then((response) => {
                setSEducs(response.data.sEducs);
                setEnseignements(response.data.enseignements);
                setCycles(response.data.cycles);
                console.log('response.data', response.data);
            }).catch((error) => {
                console.log('error', error);
            })
    };

    const handleEns = (e) => {
        setEnseignement([
            ...enseignement,
            {
                'id': e.target.value 
            }
        ]);
    }

    const handleCycle = (e) => {
        setCycle([
            ...cycle,
            {
                'id': e.target.value 
            }
        ]);
    }

    const handleSubmit = (e) => {
        e.preventDefault();
        const data = {
            'ecole_id': ecole.id,
            'se': sEduc,
            'enseignements': enseignement,
            'cycles': cycle
        }

        axios.post('/api/config', data)
            .then((response) => {
                if(response.data.success){
                    localStorage.setItem("token", response.data.token);
                    localStorage.setItem("profil", response.data.profil);
                    window.location.href = "/api/dashboard";
                }
            }).catch((error) => console.log('error', error))
    }

    useEffect(() => {
        getConfigData();
    }, []);

    return (
        <div className="grid grid-flow-row gap-4">
            <div>
                <Menu />
            </div>
            <div className="grid gap-4 m-auto py-10 px-20 justify-center bg-white rounded-3xl border-t-4 border-main-blue">
                <h1 className="font-bold pb-8 text-center text-[22px]">Configurez vos enseignements</h1>
                <form method="POST" onSubmit={handleSubmit}>
                    <div className="grid mb-8">
                        <h3 className="text-[14px] text-main-blue">Quel Système éducatif?</h3>
                        <span className="text-text">Choisissez votre Système éducatif</span>                        
                        <div className='flex'>
                            <ul className="flex gap-x-5">
                                {sEducs && sEducs.map((se) => (
                                    <li key={se.id}>
                                        <input className="peer sr-only" type="radio" value={se.id} onChange={(e) => setSEduc(e.target.value)} name="se" id={se.id} />
                                        <label 
                                            className="w-fit cursor-pointer rounded-full border border-gray-300 bg-white py-2 px-4 hover:bg-gray-50 focus:outline-none peer-checked:border-transparent peer-checked:ring-2 peer-checked:ring-indigo-500 peer-checked:bg-indigo-500 transition-all duration-500 ease-in-out" 
                                            htmlFor={se.id}
                                        >
                                            {se.se}
                                        </label>
                                        <div className="my-8 transition-all duration-500 ease-in-out translate-x-40 hidden peer-checked:grid peer-checked:translate-x-1">
                                            <h3 className="text-[14px] text-main-blue">Enseignements du système éducatif <span className="font-bold">{se.se}</span></h3>
                                            <span className="text-text">Choisissez vos enseignements(Plusieurs choix sont possibles)</span>
                                            <div className="flex">
                                                <ul className="flex gap-x-5">
                                                    {enseignements && enseignements.map((enseignement) => (                                                                                                  
                                                        (enseignement.systemeEducatif_id == se.id) && (
                                                        <li key={enseignement.id}>
                                                            <input className="peer sr-only" type="checkbox" name='enseignement' value={enseignement.id} id={enseignement.enseignement} onChange={handleEns} />
                                                            <label 
                                                                className="w-fit cursor-pointer rounded-full border border-gray-300 bg-white py-2 px-4 hover:bg-gray-50 focus:outline-none peer-checked:border-transparent peer-checked:ring-2 peer-checked:ring-indigo-500 transition-all duration-500 ease-in-out" 
                                                                htmlFor={enseignement.enseignement}
                                                            >{enseignement.enseignement}</label>
                                                            <div className="my-8 transition-all duration-500 ease-in-out translate-x-40 hidden peer-checked:grid peer-checked:translate-x-1">
                                                                <h3 className="text-[14px] text-main-blue">Cycle de l'enseignement <span className="font-bold">{enseignement.enseignement}</span></h3>
                                                                <span className="text-text">Choisissez vos cycles(Plusieurs choix sont possibles)</span>
                                                                <div className="flex">
                                                                    <ul className="flex gap-x-5">
                                                                        {cycles && cycles.map((cycle) => (
                                                                            cycle.enseignement_id == enseignement.id &&
                                                                            (
                                                                                <li key={cycle.id}>
                                                                                    <input className="peer sr-only" type="checkbox" name="cycles" id={cycle.cycle} value={cycle.id} onChange={handleCycle} /> 
                                                                                    <label 
                                                                                        className="w-fit cursor-pointer rounded-full border border-gray-300 bg-white py-2 px-4 hover:bg-gray-50 focus:outline-none peer-checked:border-transparent peer-checked:ring-2 peer-checked:ring-indigo-500 transition-all duration-500 ease-in-out" 
                                                                                        htmlFor={cycle.cycle}
                                                                                    >{cycle.cycle}</label>
                                                                                </li>
                                                                            )
                                                                        ))}                                                                    
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>  
                                                        )
                                                    ))}                                                                                              
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                ))}
                            </ul>
                        </div>
                    </div>
                    <div className="flex justify-center m-auto">
                        <button type="submit" className="bg-main-blue text-white text-sm rounded-full px-4 py-2">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    );
}

export default Configuration;