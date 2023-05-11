import Navbar from "../Navbar";
import Sidebar from "../Sidebar";

function Add() {
    return (
        <div className="grid">
            <Navbar sigle="ISI" ecole="Institut Supérieur d'Informatique" />
            <div className="flex flex-row w-[100%]">
                <Sidebar actif="departements" />
                <div className="relative left-[10%] px-12 py-4 w-[80%] mx-auto">
                    <div className="flex justify-between">
                        <div className="mb-7">
                            <h1 className="text-2xl font-semibold m-0">
                                Département
                            </h1>
                            <span className="text-md font-light tracking-[.10em] m-0">
                                Nouveau département
                            </span>
                        </div>
                        <div className="">
                            <button className="border-2 bg-gray rounded-full px-8 py-2 mr-4">
                                Retour aux départements
                            </button>
                            <button className="border-2 border-yellow rounded-full text-yellow px-8 py-2">
                                Voir ma page en ligne
                            </button>
                        </div>
                    </div>
                    <div className="grid grid-cols-2 gap-4">
                        <div className="bg-white py-3 px-6 rounded-xl">
                            <h1 className="text-slate-600 text-[17px] mb-4">
                                Ajouter un nouveau département
                            </h1>
                            <div className="mb-4">
                                <input
                                    type="text"
                                    name="nomDepartement"
                                    placeholder="Nom du département..."
                                    className="px-4 py-2 w-full bg-white border border-slate-200 rounded-xl text-[16px] font-normal placeholder:text-[14px]"
                                />
                            </div>
                            <div className="mb-4">
                                <textarea
                                    type="text"
                                    name="nomDepartement"
                                    placeholder="Description du département..."
                                    className="px-4 py-2 w-full bg-white border border-slate-200 rounded-xl text-[16px] font-normal placeholder:text-[14px]"
                                ></textarea>
                            </div>
                        </div>
                        <div className="grid bg-white py-3 px-6 rounded-xl">
                            <h1 className="text-slate-600 text-[17px] mb-4">
                                Ajouter des filières au département
                            </h1>
                            <div className="mb-4">
                                <input
                                    type="text"
                                    name="nomfiliere"
                                    placeholder="Ajouter une filière pour le département..."
                                    className="px-4 py-2 w-full bg-white border border-slate-200 rounded-xl text-[16px] font-normal placeholder:text-[14px]"
                                />
                            </div>
                            <div className="grid">
                                <div className="bg-slate-200 py-3 px-6 rounded-t-xl">
                                    <h3 className="text-slate-600 text-[14px]">
                                        Filières du département : Département
                                        Informatique
                                    </h3>
                                </div>
                                <div className="border rounded-b-xl border-slate-200">
                                    <ul>
                                        <li className="group flex justify-between text-[14px] px-6 border-t border-slate-200 py-2">
                                            Génie logiciel
                                            <span className="hidden group-hover:block">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 384 512"
                                                    className="w-4 h-4 fill-red-500"
                                                >
                                                    <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li className="group flex justify-between text-[14px] px-6 border-t border-slate-200 py-2">
                                            Multimédia
                                            <span className="hidden group-hover:block">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 384 512"
                                                    className="w-4 h-4 fill-red-500"
                                                >
                                                    <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                                </svg>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="flex justify-end m-4 gap-4">
                        <button className="py-2 px-8 rounded-full bg-red-600 text-white font-bold">Annuler</button>
                        <button className="py-2 px-8 rounded-full bg-main-blue text-white font-bold">Ajouter</button>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Add;
