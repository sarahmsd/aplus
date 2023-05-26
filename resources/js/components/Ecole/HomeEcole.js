import logo from "../../assets/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg";
import cover from "../../assets/cover.jpg";
import Footer from "../Footer";
import { useEffect, useState } from "react";
import axios from "axios";
import Menu2 from "../Menu2";

function HomeEcole() {
    const [ecole, setEcole] = useState({});
    const [departements, setDepartements] = useState([]);
    const [accreds, setAccreds] = useState([]);
    const [ecoleens, setEcoleens] = useState([]);
    const [activites, setActivites] = useState([]);
    const url = new URL(window.location.href);
    const params = new URLSearchParams(url.search);
    const id = params.get('id');

    const details = (f) => {
        const url = new URL(`http://localhost:8000/api/formation/`);
        url.searchParams.set('id', f.id);
        window.location.assign(url.toString());
    }

    const allactivites = (id) => {
        const url = new URL(`http://localhost:8000/api/activites/`);
        url.searchParams.set('e', id);
        window.location.assign(url.toString());
    }

    const getEcole = () => {
        axios.get(`/api/getEcole/${id}`)
            .then((response) => {
                setEcole(response.data.ecole);
                setDepartements(response.data.ecole.departements);
                setAccreds(response.data.accreditations);
                setEcoleens(response.data.ecole.cycles);
                setActivites(response.data.activites);
                console.log(response.data.activites);
            })
            .catch((e) => console.log("e", e.message));
    };
    useEffect(() => {
        getEcole();
        console.log(activites);
    }, []);

    return (
        <div className="grid">  
            <Menu2 />          
            <div className="flex flex-col h-[80vh] bg-default-cover w-full bg-cover">
                <div className="group mt-auto w-[400px] left-0 h-fit bg-gray rounded-tr-md">
                    <div className="flex justify-between bg-main-blue pl-12 pr-4 py-2 rounded-tr-md">
                        <h1 className="font-bold text-md tracking-tight text-white my-auto" htmlFor="collapse">
                            {ecole.ecole}
                        </h1>
                        <span className="transition group-open::rotate-180">
                            <svg className="fill-yellow" height="24" shapeRendering="geometricPrecision" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </div>
                    <div className="flex justify-between pl-12 pr-4 py-2 border border-b-slate-300">
                        <span className="text-main-darken text-sm">{ecole.email}</span>
                        <span className="text-main-darken text-sm">{ecole.telephone}</span>
                        <span className="text-main-darken text-sm">{ecole.siteWeb}</span>
                    </div>
                    <p className="text-neutral-600 mt-3 group-open:animate-fadeIn pl-12 pr-4 hidden">
                        SAAS platform is a cloud-based software service that allows users to access
                        and use a variety of tools and functionality.
                    </p>
                </div>          
            </div>
            <div className="xl:flex md:flex sm:grid justify-between m-12 gap-4">
                <div className="basis-2/3 grid gap-2 h-fit">
                    <h3 className="text-4xl tracking-widest text-main-blue mb-2">Documentations</h3>
                    <div className="m-0 grid bg-white p-0 rounded">
                        <input type="checkbox" className="sr-only peer" name="enseignement" id="enseignement" />
                        <label htmlFor="enseignement" className="bg-main-blue px-4 py-2 w-full rounded text-white font-bold tracking-widest cursor-pointer hover:bg-yellow peer-checked:bg-yellow">Enseignement et niveau d'études</label>
                        <div className="hiiden p-4 transition-all duration-500 ease-in-out translate-x-40 hidden peer-checked:flex flex-wrap gap-2 peer-checked:translate-x-1">
                            {ecoleens && ecoleens.map((e) => (
                                <button key={e.id} className="border hover:border-yellow px-4 py-2 hover:text-yellow text-sm rounded-full">{e.cycle}</button>
                            ))}
                        </div>
                    </div>
                    <div className="m-0 grid bg-white p-0 rounded">
                        <input type="checkbox" className="sr-only peer" name="docs" id="docs" />
                        <label htmlFor="docs" className="bg-main-blue px-4 py-2 w-full rounded text-white font-bold tracking-widest cursor-pointer hover:bg-yellow peer-checked:bg-yellow">Documents utiles</label>
                        <div className="hiiden p-4 transition-all duration-500 ease-in-out translate-x-40 hidden peer-checked:flex flex-wrap gap-2 peer-checked:translate-x-1">
                            <span className="text-slate-400">Aucun document</span>
                        </div>
                    </div>
                    <div className="border-yellow border-y-4 rounded-md grid text-center py-12 w-[62%] justify-center mx-auto my-6">
                        <h3 className="text-main-darken tracking-[24px] font-extralight text-3xl text-center ml-4">ACCREDITATIONS</h3>
                        <div className="flex justify-center gap-4 mt-4 ">
                            {accreds && accreds.map((accred) => (
                                <span key={accred.id} className="text-slate-500">{accred.nomAcreditation}</span>
                            ))}
                        </div>
                    </div>
                </div>
                <div className="basis-1/3 grid gap-2 h-fit">
                    <h3 className="text-4xl tracking-widest text-main-blue mb-2">Formations</h3>
                    {departements && departements.map((dept) => (
                        <div className="m-0 p-0 bg-slate-200" key={dept.id}>
                            <input type="radio" className="sr-only peer" name="dept" id={dept.id} />
                            <label className="text-white font-bold tracking-widest rounded bg-main-blue px-4 py-2 w-full cursor-pointer peer-checked:bg-yellow hover:bg-yellow" htmlFor={dept.id}>
                                {dept.nomDepartement}
                            </label>
                            <div className="py-2 transition-all duration-500 ease-in-out translate-x-40 hidden peer-checked:grid gap-2 peer-checked:translate-x-1">
                                <ul className="grid px-4">
                                    {dept.filieres && dept.filieres.map((f) => (
                                        <li key={f.id} className="text-main-darken text-sm cursor-pointer hover:text-main-blue" onClick={() => details(f)}>{f.nomFiliere}</li>
                                    ))}
                                </ul>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
            <div className="grid gap-2 mt-20">
                <div className="flex justify-between gap-4 px-12 py-4">
                   <h2 className="text-main-blue text-4xl">Activités</h2>
                   <div className="flex justify-end hover:text-main-blue cursor-pointer gap-2">
                        <a className="text-md text-yellow font-light underline m-auto" onClick={() => allactivites(id)}>tout voir</a>
                        <svg className="fill-yellow h-4 w-4 m-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>                
                   </div>
                </div>
                <div className="xl:flex md:flex sm:grid justify-between gap-4 sm:w-[100%] sm:justify-center px-12">
                    {activites &&                       
                        <>
                        {activites.length >= 1 && 
                            <div className="xl:basis-1/4 md:basis-1/4 grid gap-2 xl:h-[400px] sm:w-full">
                                <div className="border-slate-300 border-2 p-8 h-[300px]">
                                    <div className="bg-default-cover bg-cover w-full h-full ">
                                    </div>
                                    <div className="mt-auto bg-white px-4 py-2 text-xl text-center">{activites[0].nomActivite}</div>
                                </div>
                            </div>
                        }
                        {activites.length >= 2 && 
                            <div className="basis-2/4 grid gap-2 bg-slate-200 w-full h-[300px] p-8 xl:mt-10 md:mt-10">
                                <div className="border-slate-300 border-2 p-8 h-[300px] w-full">
                                    <div className="bg-default-cover bg-cover w-full h-full">
                                    </div>
                                    <div className="mt-auto bg-white px-4 py-2 text-xl text-center">{activites[1].nomActivite}</div>
                                </div> 
                            </div>
                        }
                        {activites.length >= 3 && 
                            <div className="basis-1/4 grid gap-2 xl:h-[400px]">
                                <div className="border-slate-300 border-2 p-8 h-[300px] w-full">
                                    <div className="bg-default-cover bg-cover w-full h-full ">
                                    </div>
                                    <div className="mt-auto bg-white px-4 py-2 text-xl text-center">{activites[2].nomActivite}</div>
                                </div>
                            </div> 
                        }
                        </>                       
                    }                    
                </div>                
            </div>
            <div className="grid gap-2 mt-20">
                <div className="flex justify-between gap-4 px-12 py-4">
                   <h2 className="text-main-blue text-4xl">Galerie</h2>
                   <div className="flex justify-end hover:text-main-blue cursor-pointer gap-2">
                        <a className="text-md text-yellow font-light underline m-auto">tout voir</a>
                        <svg className="fill-yellow h-4 w-4 m-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>                
                   </div>
                </div>
                <div className="max-h-fit grid xl:grid-rows-3 xl:grid-flow-col md:grid-rows-3 md:grid-flow-col sm:grid-col gap-4 px-12 pt-4">
                    <div className="xl:row-span-3 md:row-span-3 p-4 h-fit bg-slate-200">
                        <div className="border-slate-300 border-2 px-8 w-full  py-2 h-[600px]">
                            <div className="bg-default-cover bg-cover h-[600px] ">
                            </div>
                        </div>
                    </div>
                    <div className="xl:col-span-2 md:col-span-2 p-4 h-fit bg-slate-200">
                        <div className="border-slate-300 border-2 px-8 py-2 h-[200px] xl:flex xl:justify-between md:flex-row md:flex sm:grid gap-4">
                            <div className="bg-default-cover bg-cover basis-1/2">
                            </div>
                            <div className="bg-default-cover bg-cover basis-1/2">
                            </div>
                        </div>
                    </div>
                    <div className="xl:row-span-2 xl:col-span-2 md:row-span-2 md:col-span-2 bg-slate-200 p-4 h-fit">
                        <div className="border-slate-300 border-2 px-8 py-2 h-full">
                            <div className="bg-default-cover bg-cover w-full h-[400px] ">
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <Footer />
        </div>
    );
}

export default HomeEcole;
