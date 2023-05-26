import { useEffect, useState } from "react";
import { Link } from "react-router-dom";
import Navbar from "../Navbar";
import Sidebar from "../Sidebar";

function Liste({onlinepage}) {
    const [departements, setDepartements] = useState([]);
    const [filieres, setFilieres] = useState([]);
    const [searchTerm, setSearchTerm] = useState('');
    const [filteredDepartements, setFilteredDepartements] = useState([]);
    const [filterTerm, setFilterTerm] = useState('');

    const ecole = JSON.parse(localStorage.getItem("profil"));

    const data = () => {
        axios
            .get(`/api/dData/${ecole.id}`)
            .then((response) => {
                setFilieres(response.data.filieres);
                setDepartements(response.data.ecole.departements);
                setFilteredDepartements(response.data.ecole.departements);
            })
            .catch((error) => {
                console.log(error);
            });
    };

    const details = (dept) => {
        const url = new URL(`http://localhost:8000/api/details_departement/`);
        url.searchParams.set('id', dept.id);
        window.location.assign(url.toString());
    }

    const handleSearchChange = (event) => {
        const searchTerm = event.target.value;
        setSearchTerm(searchTerm);
        
        let filteredDepartments = departements.filter((department) =>
            department.nomDepartement.toLowerCase().includes(searchTerm.toLowerCase()) || department.descriptionDepartement.toLowerCase().includes(searchTerm.toLowerCase())
        );        
        setFilteredDepartements(filteredDepartments);
    };

    const resetSearch = () => {
        setSearchTerm('');
        setFilteredDepartements(departements);
    };
      

    useEffect(() => {
        data();
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
                                Départements
                            </h1>
                            <span className="text-md font-light tracking-[.10em] m-0">
                                Liste des départements
                            </span>
                        </div>
                        <div className="">
                            <button
                                className="border-2 border-main-blue rounded-full text-main-blue px-8 py-2 mr-4"
                                onClick={(e) =>
                                    (window.location.href =
                                        "/api/add_departement")
                                }
                            >
                                Ajouter un département
                            </button>
                            <button 
                                className="border-2 border-yellow rounded-full text-yellow px-8 py-2"
                                onClick={onlinepage}
                            >
                                Voir ma page en ligne
                            </button>
                        </div>
                    </div>
                    <div className="bg-white rounded grid">
                        <div className="flex justify-between p-4 gap-2">
                            <div className="w-[100%] flex">
                                <input
                                    type="text"
                                    className="border rounded-full px-4 py-2 w-full"
                                    placeholder="Rechercher un département"
                                    name="search"
                                    value={searchTerm}
                                    onChange={handleSearchChange}
                                />
                                <span className="text-slate-300 my-auto ml-[-30px] font-bold cursor-pointer" onClick={resetSearch}>X</span>
                            </div>
                        </div>
                        <table className="w-[100%]">
                            <thead className="bg-main-blue p-12">
                                <tr className="my-2 ">
                                    <th className="text-white font-extralight text-md py-3 px-8 border-r border-slate-200">
                                        Nom Département
                                    </th>
                                    <th className="text-white font-extralight text-md py-3 px-8 border-r border-slate-200">
                                        Description
                                    </th>
                                    <th className="text-white font-extralight text-md py-3 px-8">
                                        Filières
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                {filteredDepartements.map((dept) => (
                                    <tr
                                        className="border-t border-slate-200 w-[100%]"
                                        key={dept.id}
                                    >
                                        <td className="py-2 w-[30%] px-8 border-r border-slate-200">
                                            <h2 className="font-medium text-[13px] text-slate-600 cursor-pointer hover:text-main-blue" onClick={() => details(dept)}>
                                                {dept.nomDepartement}
                                            </h2>
                                        </td>
                                        <td className="py-2 w-[40%] px-8 border-r border-slate-200">
                                            <span className="text-[12px] text-slate-600">
                                                {dept.descriptionDepartement.slice(
                                                    0,
                                                    70
                                                )}
                                            </span>
                                        </td>
                                        <td className="py-2 w-[30%] px-8">
                                            {dept.filieres.map(
                                                (filiere, key) =>
                                                    key < 2 && (
                                                        <span
                                                            key={filiere.id}
                                                            className="text-[10px] text-slate-500 mr-2"
                                                        >
                                                           #{filiere.nomFiliere}
                                                        </span>
                                                    )
                                            )}
                                            {parseInt(dept.filieres.length) > 2 && <span>...</span>}
                                        </td>
                                    </tr>
                                ))}
                            </tbody>
                            {/* <tfoot>
                                <tr className="">
                                    <td></td>
                                    <td
                                        colSpan="2"
                                        className="bg-main-blue rounded-br-md text-xl p-4"
                                    >
                                        <div className="bg-white rounded-md flex justify-between w-full">
                                            <span className="text-[17px] w-[7%] text-md text-center">
                                                Prec.
                                            </span>
                                            <span className="text-[17px] w-[20%] text-md text-center border-l border-slate-300">
                                                1
                                            </span>
                                            <span className="text-[17px] w-[20%] text-md text-center border-r border-slate-300 bg-yellow text-white">
                                                2
                                            </span>
                                            <span className="text-[17px] w-[20%] text-md text-center border-r border-slate-300">
                                                3
                                            </span>
                                            <span className="text-[17px] w-[20%] text-md text-center border-r border-slate-300">
                                                4
                                            </span>
                                            <span className="text-[17px] w-[7%] text-md text-center">
                                                Suiv.
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot> */}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Liste;
