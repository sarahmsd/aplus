import logo from "../../assets/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg";
import cover from "../../assets/cover.jpg";
import Footer from "../Footer";
import { useEffect, useState } from "react";
import axios from "axios";
import Menu2 from "../Menu2";

function DetailsActivite() {   
    const [activite, setActivite] = useState('');
    const [activites, setActivites] = useState([]);
    const [medias, setMedias] = useState([]);
    const [ecole, setEcole] = useState('');
    const url = new URL(window.location.href);
    const params = new URLSearchParams(url.search);
    const id = params.get('id');

    const home = (e) => {
        const url = new URL(`http://localhost:8000/api/ecole/`);
        url.searchParams.set('id', e.id);
        window.location.assign(url.toString());
    }

    const details = (id) => {
        const url = new URL(`http://localhost:8000/api/details_activite/`);
        url.searchParams.set('id', id);
        window.location.assign(url.toString());
    }

    const getActivite = () => {
        axios.get(`/api/getDetailsActivite/${id}`)
            .then((response) => {
                setActivite(response.data.activite);
                setActivites(response.data.activites);
                setEcole(response.data.ecole);
                setMedias(response.data.medias);
            })
            .catch((e) => console.log("e", e.message));
    };

    useEffect(() => {
        getActivite();
    }, []);

    return (
        <div className="grid">  
            <Menu2 />          
            <div className="flex flex-col h-[50vh] bg-default-cover w-full bg-cover">
                <div className="mt-auto w-[400px] h-fit bg-main-blue px-12 py-4 justify-center">
                        <h1 className="font-bold text-md tracking-widest text-white my-auto" htmlFor="collapse">
                            Details Activité
                        </h1>
                </div>          
            </div>
            <div className="cursor-pointer group flex justify-start px-12 py-4 gap-2 max-w-fit" onClick={() => home(ecole)}>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" className="my-auto h-4 w-4 fill-slate-400 group-hover:fill-main-blue">
                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                </svg>
                <span className="my-auto text-md text-slate-400 cursor-pointer group-hover:text-main-blue">Retour a la page d'accueil</span>
            </div>
            <div className="flex justify-between mx-12 my-2 gap-4">
                <div className="basis-2/3 grid gap-2 h-fit">
                    <h3 className="text-xl text-main-blue mb-2">{activite.nomActivite}</h3>                        
                    <div className="bg-white px-4 py-4 h-fit rounded grid text-start gap-2">
                        <div className="grid gap-2 left-0">
                            <input type="radio" name="infos" className="peer sr-only" id="desc" />
                            <label htmlFor="desc" className="text-main-darken text-md h-fit px-4 py-2 font-medium bg-slate-200 peer-checked:bg-yellow peer-checked:border-r-2 peer-checked:text-white cursor-pointer hover:text-blue-600">
                                Description
                            </label>
                            <div className="px-4 py-2 transition-all duration-500 ease-in-out translate-x-40 hidden peer-checked:grid gap-2 peer-checked:translate-x-1">
                                <p className="text-slate-500 text-sm tracking-wide">
                                    {activite.descriptionActivite}
                                </p>
                            </div>
                        </div>
                        <div className="grid gap-2 left-0">
                            <input type="radio" name="infos" className="peer sr-only" id="galerie" />
                            <label htmlFor="galerie" className="text-main-darken text-md h-fit px-4 py-2 font-medium bg-slate-200 peer-checked:bg-yellow peer-checked:border-r-2 peer-checked:text-white cursor-pointer hover:text-blue-600">
                                Galerie
                            </label>
                            <div className="px-4 py-2 transition-all duration-500 ease-in-out translate-x-40 hidden peer-checked:grid gap-2 peer-checked:translate-x-1">
                                <div className="grid grid-cols-2 p-4">
                                    {medias && medias.map((m) => (
                                        <img src={m.media} className="w-2 h-2 rounded-xl" />
                                    ))}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="basis-1/3 grid gap-2 h-fit">
                    <h3 className="text-xl text-main-blue mb-2">Autres Activités</h3>  
                    {activites && activites.map((a) => (
                        <div className="m-0 p-0 bg-slate-200" key={a.id} onClick={() => details(a.id)}>
                            <input type="radio" className="sr-only peer" name="a" id={a.id} />
                            <label className="text-white font-bold tracking-widest rounded bg-main-blue px-4 py-2 w-full cursor-pointer peer-checked:bg-yellow hover:bg-yellow" htmlFor={a.id}>
                                {a.nomActivite}
                            </label>
                        </div>
                    ))}
                </div>
            </div>
            <Footer />
        </div>
    );
}

export default DetailsActivite;