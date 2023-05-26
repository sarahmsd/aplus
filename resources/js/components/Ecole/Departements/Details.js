import { useEffect, useState } from "react";
import Navbar from "../Navbar";
import Sidebar from "../Sidebar";
import axios from "axios";
import { error } from "jquery";

function Details({onlinepage}) {
    const [departement, setDepartement] = useState({});
    const [nom, setNom] = useState('')
    const [desc, setDesc] = useState('')
    const url = new URL(window.location.href);
    const params = new URLSearchParams(url.search);
    const id = params.get('id');

    const getDepartementDetails = () => {
        axios.get(`/api/dept_details/${id}`)
            .then((response) => {
                setDepartement(response.data);
            }).catch((error) => console.log('error', error))
    }

    const showModif = (block) => {
        if(block === 'n') { 
            setNom(departement.nomDepartement);
            let input = document.getElementById('nom');
            input.classList.contains('hidden') ? input.classList.remove('hidden') : input.classList.add('hidden')
        }

        if(block === 'd') {
            setDesc(departement.descriptionDepartement);
            let old = document.getElementById('olddesc');
            let ne = document.getElementById('newdesc');
            old.classList.contains('hidden') ? old.classList.remove('hidden') : old.classList.add('hidden')
            ne.classList.contains('hidden') ? ne.classList.remove('hidden') : ne.classList.add('hidden')
        }
    }

    const modifyNom = () =>{
        if(window.confirm('Modifier?')){
            const data = {
                id: departement.id,
                nom: nom
            }
            axios.post('/api/editNomDpt', data)
                .then((response) => {
                    setDepartement(response.data);
                    setNom('');
                }).catch((error) => console.log('error', error));
        }
    }

    const modifyDesc = () =>{
        if(window.confirm('Modifier?')){
            const data = {
                id: departement.id,
                desc: desc
            }
            axios.post('/api/editDescDpt', data)
                .then((response) => {
                    setDepartement(response.data);
                    setDesc('');
                }).catch((error) => console.log('error', error));
        }
    }

    const removeFiliere = (f) => {
        if(window.confirm(`Supprimer la filiere ${f.nomFiliere}?`)){
            axios.get(`/api/deleteFiliere/${f.id}`)
                .then((response) => console.log('response', response))
                .catch((error) => console.log('error', error));
        }
    }

    const remove = () => {
        if(window.confirm(`Supprimer le departement ${departement.nomDepartement}?`)){
            axios.get(`/api/delete_departement/${departement.id}`)
                .then((response) => window.location.href='/api/departements')
                .catch((error) => console.log('error', error));
        }
    }

    useEffect(() => {
      getDepartementDetails();      
    }, [])
    

    return (
        <div className="grid">
            <Navbar sigle="ISI" ecole="Institut Supérieur d'Informatique" />
            <div className="flex flex-row w-[100%]">
                <Sidebar actif="departements" />
                <div className="relative left-[10%] px-12 py-4 w-[80%] mx-auto">
                    <div className="flex justify-between">
                        <div className="mb-7">
                            <h1 className="text-xl font-semibold m-0">
                                Détails Départements
                            </h1>
                            <span className="text-md font-light tracking-[.10em] m-0">
                                {departement.nomDepartement}
                            </span>
                        </div>
                        <div className="">
                            <button className="border-2 bg-gray rounded-full px-8 py-2 mr-4" onClick={(e) =>
                                    (window.location.href =
                                        "/api/departements")
                                }>
                                Retour aux départements
                            </button>
                            <button className="border-2 border-yellow rounded-full text-yellow px-8 py-2"
                            onClick={onlinepage}>
                                Voir ma page en ligne
                            </button>
                        </div>
                    </div>
                    <div className="grid grid-cols-2 gap-4 content-start">
                        <div className="grid gap-2 h-fit">
                            <div className="flex justify-between rounded-xl bg-white py-2 px-6 max-h-fit group">
                                <h3 className="text-md text-main-blue">
                                    {departement.nomDepartement}
                                    <div id="nom" className="flex justify-between hidden w-full my-2">                                    
                                        <input
                                            type="text"
                                            name="nomDepartement"                                        
                                            className="border border-slate-300 rounded-xl px-4 w-[300px] focus:outline-none"
                                            value={nom}
                                            placeholder="modifier le nom du departement"
                                            onChange={(e) => setNom(e.target.value)}
                                        />
                                        <button className="bg-slate-200 p-2 rounded-r-xl ml-[-20px] text-sm text-slate-800" onClick={() => modifyNom(nom)}>modifier</button>
                                    </div>
                                </h3>
                                <span className="hidden group-hover:block" onClick={() => showModif('n')}>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512"
                                        className="w-4 h-4 fill-main-blue"
                                    >
                                        <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                                    </svg>
                                </span>
                            </div>
                            <div className="grid group bg-white rounded-xl py-3 px-6 max-h-fit">
                                <div className="flex justify-between">
                                    <h2 className="text-md text-main-blue">
                                        Description
                                    </h2>
                                    <span className="hidden group-hover:block" onClick={() => showModif('d')}>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512"
                                            className="w-4 h-4 fill-main-blue"
                                        >
                                            <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                                        </svg>
                                    </span>
                                </div>
                                <div className="w-full">
                                    <p id="olddesc" className="text-slate-500 text-sm">{departement.descriptionDepartement}</p>
                                    <div id='newdesc' className="flex justify-between hidden w-full my-2">                                    
                                        <input
                                            type="text"
                                            name="nomDepartement"                                        
                                            className="border border-slate-300 rounded-xl px-4 w-[330px] focus:outline-none"
                                            value={desc}
                                            placeholder="modifier le nom du departement"
                                            onChange={(e) => setDesc(e.target.value)}
                                        />
                                        <button className="bg-slate-200 p-2 rounded-r-xl ml-[-35px] text-sm text-slate-800" onClick={modifyDesc}>modifier</button>
                                    </div>                                    
                                </div>                                
                            </div>
                        </div>
                        <div className="grid h-fit">
                            <div className="flex justify-between rounded-t-xl bg-main-blue py-2 px-6">
                                <h3 className="text-md text-white">
                                    Filières du département                                    
                                </h3>
                            </div>
                            <div className="grid bg-white rounded-b-xl">
                                <ul>
                                    {departement.filieres && departement.filieres.map((filiere) => (
                                        <li className="group flex justify-between text-[15px] px-6 border-t border-slate-200 py-3">
                                            {filiere.nomFiliere}
                                            <span className="hidden group-hover:block" onClick={() => removeFiliere(filiere)}>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 384 512"
                                                    className="w-4 h-4 fill-red-500"
                                                >
                                                    <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                                </svg>
                                            </span>
                                        </li>
                                    ))}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div className="bg-slate-200 flex justify-between my-4 py-2 px-4 rounded">
                        <p className="text-sm text-red-800 my-auto">Supprimer le departement reviendra à supprimer toutes les filières qui y sont associées.</p>
                        <button className="bg-red-700 text-white text-sm p-2 rounded-md" onClick={remove}>Supprimer</button>
                    </div>
                </div>                
            </div>
        </div>
    );
}

export default Details;
