import logo from "../../assets/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg";
import cover from "../../assets/cover.jpg";
import Footer from "../Footer";
import { useEffect, useState } from "react";
import axios from "axios";
import Menu2 from "../Menu2";

function Formation() {
    const [filiere, setFiliere] = useState({});
    const [accreds, setAccreds] = useState([]);
    const [filieres, setFilieres] = useState([]);
    const [ecole, setEcole] = useState('');
    const url = new URL(window.location.href);
    const params = new URLSearchParams(url.search);
    const id = params.get('id');

    const details = (f) => {
        const url = new URL(`http://localhost:8000/api/formation/`);
        url.searchParams.set('id', f.id);
        window.location.assign(url.toString());
    }

    const home = (e) => {
        const url = new URL(`http://localhost:8000/api/ecole/`);
        url.searchParams.set('id', e.id);
        window.location.assign(url.toString());
    }
    
    const getFiliere = () => {
        axios.get(`/api/getFormation/${id}`)
            .then((response) => {
                setFiliere(response.data.filiere);
                setAccreds(response.data.filiere.accreditations);
                setFilieres(response.data.filieres);
                setEcole(response.data.ecole);
            })
            .catch((e) => console.log("e", e.message));
    };
    useEffect(() => {
        getFiliere();
    }, []);

    return (
        <div className="grid">  
            <Menu2 />          
            <div className="flex flex-col h-[50vh] bg-default-cover w-full bg-cover">
                <div className="mt-auto w-[400px] h-fit bg-main-blue px-12 py-4 justify-center">
                        <h1 className="font-bold text-md tracking-tight text-white my-auto" htmlFor="collapse">
                            {filiere.nomFiliere}
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
                    <h3 className="text-xl tracking-tighter text-main-blue mb-2">Informations sur la formation <span className="font-bold text-yellow ml-2 italic">{filiere.nomFiliere}</span></h3>
                    <div className="bg-white px-4 py-4 h-fit rounded grid text-start gap-2">
                        <div className="grid gap-2 left-0">
                            <input type="radio" name="infos" className="peer sr-only" id="pres" />
                            <label htmlFor="pres" className="text-main-darken text-md h-fit px-4 py-2 font-medium bg-slate-200 peer-checked:bg-yellow peer-checked:border-r-2 peer-checked:text-white cursor-pointer hover:text-blue-600">Presentation</label>
                            <div className="px-4 py-2 transition-all duration-500 ease-in-out translate-x-40 hidden peer-checked:grid gap-2 peer-checked:translate-x-1">
                                <h2 className="text-main-darken text-md">Presentation</h2>
                                <p className="text-slate-500 text-sm tracking-wide">
                                    dfsdbncjh djhdbnd djcd ncd djnhdbnd sdjhsd dbndbn.dfsdbncjh djhdbnd djcd ncd djnhdbnd sdjhsd dbndbn 
                                    dfsdbncjh djhdbnd djcd ncd djnhdbnd sdjhsd dbndbn ,dfsdbncjh djhdbnd djcd ncd djnhdbnd sdjhsd dbndbn 
                                </p>
                            </div>
                        </div>
                        <div className="grid gap-2 left-0">
                            <input type="radio" name="infos" className="peer sr-only" id="admission" />
                            <label htmlFor="admission" className="text-main-darken text-md h-fit px-4 py-2 font-medium bg-slate-200 peer-checked:bg-yellow peer-checked:border-r-2 peer-checked:text-white cursor-pointer hover:text-blue-600">Admission</label>
                            <div className="px-4 py-2 transition-all duration-500 ease-in-out translate-x-40 hidden peer-checked:grid gap-2 peer-checked:translate-x-1">
                                <h2 className="text-main-darken text-md">Admission</h2>
                                <p className="text-slate-500 text-sm tracking-wide">
                                    dfsdbncjh djhdbnd djcd ncd djnhdbnd sdjhsd dbndbn.dfsdbncjh djhdbnd djcd ncd djnhdbnd sdjhsd dbndbn 
                                    dfsdbncjh djhdbnd djcd ncd djnhdbnd sdjhsd dbndbn ,dfsdbncjh djhdbnd djcd ncd djnhdbnd sdjhsd dbndbn 
                                </p>
                            </div>
                        </div> 
                        <div className="grid gap-2 left-0">
                            <input type="radio" name="infos" className="peer sr-only" id="debouche" />
                            <label htmlFor="debouche" className="text-main-darken text-md h-fit px-4 py-2 font-medium bg-slate-200 peer-checked:bg-yellow peer-checked:border-r-2 peer-checked:text-white cursor-pointer hover:text-blue-600">Debouches</label>
                            <div className="px-4 py-2 transition-all duration-500 ease-in-out translate-x-40 hidden peer-checked:grid gap-2 peer-checked:translate-x-1">
                                <h2 className="text-main-darken text-md">Debouches</h2>
                                <p className="text-slate-500 text-sm tracking-wide">
                                    dfsdbncjh djhdbnd djcd ncd djnhdbnd sdjhsd dbndbn.dfsdbncjh djhdbnd djcd ncd djnhdbnd sdjhsd dbndbn 
                                    dfsdbncjh djhdbnd djcd ncd djnhdbnd sdjhsd dbndbn ,dfsdbncjh djhdbnd djcd ncd djnhdbnd sdjhsd dbndbn 
                                </p>
                            </div>
                        </div>
                        <div className="grid gap-2 left-0">
                            <input type="radio" name="infos" className="peer sr-only" id="diplome" />
                            <label htmlFor="diplome" className="text-main-darken text-md h-fit px-4 py-2 font-medium bg-slate-200 peer-checked:bg-yellow peer-checked:border-r-2 peer-checked:text-white cursor-pointer hover:text-blue-600">Diplomes</label>
                            <div className="px-4 py-2 transition-all duration-500 ease-in-out translate-x-40 hidden peer-checked:grid gap-2 peer-checked:translate-x-1">
                                <h2 className="text-main-darken text-md">Diplomes</h2>
                                <p className="text-slate-500 text-sm tracking-wide">
                                    dfsdbncjh djhdbnd djcd ncd djnhdbnd sdjhsd dbndbn.dfsdbncjh djhdbnd djcd ncd djnhdbnd sdjhsd dbndbn 
                                    dfsdbncjh djhdbnd djcd ncd djnhdbnd sdjhsd dbndbn ,dfsdbncjh djhdbnd djcd ncd djnhdbnd sdjhsd dbndbn 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div className="border-yellow border-y-4 rounded grid text-center py-8 w-[65%] justify-center mx-auto my-6">
                        <h3 className="text-main-darken tracking-[24px] font-extralight text-3xl text-center ml-4">ACCREDITATIONS</h3>
                        <div className="flex justify-center gap-4 mt-4 ">
                            {accreds && accreds.map((accred) => (
                                <span key={accred.id} className="text-slate-500">{accred.nomAcreditation}</span>
                            ))}
                        </div>
                    </div>
                </div>
                <div className="basis-1/3 grid gap-2 h-fit">
                    <h3 className="text-xl text-main-blue mb-2">Formations Similaires</h3>  
                    {filieres && filieres.map((f, k) => (
                        k < 4 &&
                        <div className="grid gap-2" key={f.id}>
                            <span 
                                className="text-white rounded-md bg-main-blue px-4 py-2 w-full cursor-pointer hover:bg-yellow" 
                                onClick={() => details(f)}
                            >
                                {f.nomFiliere}
                            </span>
                        </div>
                    ))}
                </div>
            </div>
            <Footer />
        </div>
    );
}

export default Formation;
