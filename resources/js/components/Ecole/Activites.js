import logo from "../../assets/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg";
import cover from "../../assets/cover.jpg";
import Footer from "../Footer";
import { useEffect, useState } from "react";
import axios from "axios";
import Menu2 from "../Menu2";

function Activites() {   
    const [activites, setActivites] = useState([]);
    const [departements, setDepartements] = useState([]);
    const url = new URL(window.location.href);
    const params = new URLSearchParams(url.search);
    const id = params.get('e');

    const home = (e) => {
        const url = new URL(`http://localhost:8000/api/ecole/`);
        url.searchParams.set('id', parseInt(e));
        window.location.assign(url.toString());
    }  
    
    const detailsFormation = (f) => {
        const url = new URL(`http://localhost:8000/api/formation/`);
        url.searchParams.set('id', f.id);
        window.location.assign(url.toString());
    }

    const details = (id) => {
        const url = new URL(`http://localhost:8000/api/details_activite/`);
        url.searchParams.set('id', id);
        window.location.assign(url.toString());
    }
    
    const getActivites = () => {
        axios.get(`/api/getActivites/${id}`)
            .then((response) => {                
                setActivites(response.data);
            })
            .catch((e) => console.log("e", e.message));
    };

    const getFormation = () => {
        axios.get(`/api/getEcole/${id}`)
            .then((response) => {
                setDepartements(response.data.ecole.departements);
            })
            .catch((e) => console.log("e", e.message));
    };

    useEffect(() => {
        getActivites();
        getFormation();
    }, []);

    return (
        <div className="grid">  
            <Menu2 />          
            <div className="flex flex-col h-[50vh] bg-default-cover w-full bg-cover">
                <div className="mt-auto w-[400px] h-fit bg-main-blue px-12 py-4 justify-center">
                        <h1 className="font-bold text-md tracking-widest text-white my-auto" htmlFor="collapse">
                            Nos activités
                        </h1>
                </div>          
            </div>
            <div className="cursor-pointer group flex justify-start px-12 py-4 gap-2 max-w-fit" onClick={() => home(id)}>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" className="my-auto h-4 w-4 fill-slate-400 group-hover:fill-main-blue">
                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                </svg>
                <span className="my-auto text-md text-slate-400 cursor-pointer group-hover:text-main-blue">Retour a la page d'accueil</span>
            </div>
            <div className="flex justify-between mx-12 my-2 gap-4">
                <div className="basis-2/3 grid gap-2 h-fit">
                    <div className="xl:grid md:grid sm:grid justify-between gap-4 sm:w-[100%] sm:justify-center "> 
                        <h3 className="text-xl text-main-blue mb-2">Nos Activités</h3>                         
                        <div className="grid grid-cols-3 gap-2 w-full">
                             {activites && activites.map((a) => (
                                <div key={a.id} className="bg-slate-200 p-4 cursor-pointer" onClick={() => details(a.id)}>
                                    <div className="border-yellow border-2 p-2">                                
                                        <div className="mt-auto bg-white p-2 grid gap-2">
                                            <h2 className="text-xl text-main-darken">{a.nomActivite}</h2>
                                            <p className="text-md text-slate-500">{a.descriptionActivite && a.descriptionActivite.slice(0, 40)}...</p>
                                        </div>
                                    </div>
                                </div>
                             ))}
                        </div>
                    </div>
                </div>
                <div className="basis-1/3 grid gap-2 h-fit">
                    <h3 className="text-xl text-main-blue mb-2">Nos Formations</h3>  
                    {departements && departements.map((dept) => (
                        <div className="m-0 p-0 bg-slate-200" key={dept.id}>
                            <input type="radio" className="sr-only peer" name="dept" id={dept.id} />
                            <label className="text-white font-bold tracking-widest rounded bg-main-blue px-4 py-2 w-full cursor-pointer peer-checked:bg-yellow hover:bg-yellow" htmlFor={dept.id}>
                                {dept.nomDepartement}
                            </label>
                            <div className="py-2 transition-all duration-500 ease-in-out translate-x-40 hidden peer-checked:grid gap-2 peer-checked:translate-x-1">
                                <ul className="grid px-4">
                                    {dept.filieres && dept.filieres.map((f) => (
                                        <li key={f.id} className="text-main-darken text-sm cursor-pointer hover:text-main-blue" onClick={() => detailsFormation(f)}>{f.nomFiliere}</li>
                                    ))}
                                </ul>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
            <Footer />
        </div>
    );
}

export default Activites;