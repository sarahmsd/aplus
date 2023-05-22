import { useEffect, useState } from "react";
import Navbar from "../Navbar";
import Sidebar from "../Sidebar";
import axios from "axios";
import Select from "react-select";

function AddFiliere() {
    const [filieres, setFilieres] = useState([]);
    const [accreds, setAccreds] = useState([]);
    const [accred, setAccred] = useState({});
    const [nom, setNom] = useState('');
    const [desc, setDesc] = useState('');
    const [departement, setDepartement] = useState('');
    const [optionsDepartements, setOptionsDepartements] = useState([]); 
    const [message, setMessage] = useState('');
    const ecole = JSON.parse(localStorage.getItem("profil"));

    const data = () => {
        axios
            .get(`/api/dData/${ecole.id}`)
            .then((response) => {
                response.data.ecole.departements.forEach(dept => {
                    setOptionsDepartements((prev) => [
                        ...prev,
                        {
                            value: dept.id,
                            label: dept.nomDepartement
                        }
                    ])
                });                
            })
            .catch((error) => {
                console.log(error);
            });
    };

    const addAccred = () => {
       accred.nom != null
            ? setAccreds([...accreds, {nom: accred.nom}])
            : alert("Pas de filière à ajouté");  
    };

    const removeAccred = (filiere) => {
        if(window.confirm('retirer la filiere?')){
            filieres.forEach((selected) => {
                (filiere.nom === selected.nom) &&
                    setFilieres(filieres.filter((selectedFiliere) => selectedFiliere.nom !== filiere.nom))
            });
        }
    };

    const handleDept = () => {

    }

    const submit = (e) => {
        e.preventDefault();
        const data = {
            departement_id: departement,
            nomFiliere: nom,
            descriptionFiliere: desc,
            accreditations: accreds
        }

        console.log('data', data);
        axios.post('/api/create_filiere', data)
            .then((response) => {
                setMessage(response.data.success);
                setNom('');
                setDesc('');
                setFilieres([]);
                setAccreds([]);
                setAccred({});
            }).catch((error) => {
                console.log(error);
            });
    };    

    useEffect(() => {
        data();
    }, [])
    
    return (
        <div className="grid">
            <Navbar sigle="ISI" ecole="Institut Supérieur d'Informatique" />
            <div className="flex flex-row w-[100%]">
                <Sidebar actif="departements" />
                <div className="relative left-[10%] px-12 py-4 w-[80%] mx-auto"> 
                    {message}                   
                    <form method="post" onSubmit={submit}>
                        <div className="flex justify-between">
                            <div className="mb-7">
                                <h1 className="text-2xl font-semibold m-0">
                                    Filiere
                                </h1>
                                <span className="text-md font-light tracking-[.10em] m-0">
                                    Nouvelle Filiere
                                </span>
                            </div>
                            <div className="">
                                <button
                                    className="border-2 bg-gray rounded-full px-8 py-2 mr-4"
                                    onClick={() =>
                                        (window.location.href =
                                            "/api/filieres")
                                    }
                                >
                                    Retour aux filieres
                                </button>
                                <button className="border-2 border-yellow rounded-full text-yellow px-8 py-2">
                                    Voir ma page en ligne
                                </button>
                            </div>
                        </div>
                        <div className="grid grid-cols-2 gap-4">
                            <div className="bg-white py-3 px-6 rounded-xl">
                                <h1 className="text-slate-600 text-[17px] mb-4">
                                    Ajouter une nouvelle filiere
                                </h1>
                                <div className="mb-4">
                                    <input
                                        type="text"
                                        name="nom"
                                        placeholder="Nom de la filiere..."
                                        className="px-4 py-2 w-full bg-white border border-slate-200 rounded-xl text-[16px] font-normal placeholder:text-[14px]"
                                        value={nom}
                                        onChange={(e) => setNom(e.target.value)}
                                    />
                                </div>
                                <div className="mb-4">
                                    <textarea
                                        type="text"
                                        name="description"
                                        placeholder="Description de la filiere..."
                                        className="px-4 py-2 w-full bg-white border border-slate-200 rounded-xl text-[16px] font-normal placeholder:text-[14px]"
                                        value={desc}
                                        onChange={(e) => setDesc(e.target.value)}
                                    ></textarea>
                                </div>
                                <div className="mb-4">
                                    <Select
                                        options={optionsDepartements}
                                        name="departement"
                                        placeholder="Selectionnez un departement..."
                                        onChange={(e) => setDepartement(e.value)} 
                                    />
                                </div>
                            </div>
                            <div className="grid bg-white py-3 px-6 rounded-xl">
                                <h1 className="text-slate-600 text-[17px] mb-4">
                                    Ajouter des accredidations a la filiere
                                </h1>
                                <div className="mb-4 flex flex-wrap">
                                    <input
                                        type="text"
                                        name="nomfiliere"
                                        placeholder="Ajouter une filière pour le département..."
                                        className="px-4 py-2 w-[94%] bg-white border border-slate-200 rounded-xl text-[16px] font-normal placeholder:text-[14px]"
                                        value={accred.nom}
                                        onChange={(e) =>
                                            setAccred({ nom: e.target.value })
                                        }
                                    />
                                    <button
                                        type="button"
                                        className="text-2xl font-bold text-main-blue"
                                        onClick={addAccred}
                                    >
                                        +
                                    </button>
                                </div>
                                <div className="grid">
                                    <div className="bg-slate-200 py-3 px-6 rounded-t-xl">
                                        <h3 className="text-slate-600 text-[14px]">
                                           Accredidations
                                        </h3>
                                    </div>
                                    <div className="border rounded-b-xl border-slate-200">
                                        <ul>
                                            {accreds.map((accred) => (
                                                <li className="group flex justify-between text-[14px] px-6 border-t border-slate-200 py-2">
                                                    {accred.nom}
                                                    <span
                                                        className="hidden group-hover:block"
                                                        onClick={() => removeAccred(accred)}
                                                    >
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
                        </div>
                        <div className="flex justify-end m-4 gap-4">
                            <button
                                type="reset"
                                className="py-2 px-8 rounded-full bg-red-600 text-white font-bold"
                            >
                                Annuler
                            </button>
                            <button
                                type="submit"
                                className="py-2 px-8 rounded-full bg-main-blue text-white font-bold"
                            >
                                Ajouter
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    );
}

export default AddFiliere;
