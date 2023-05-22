import { useState } from "react";
import Navbar from "../Navbar";
import Sidebar from "../Sidebar";

function DetailsFiliere() {
    const [nom, setNom] = useState("");
    const [description, setDescription] = useState("");

    return (
        <div className="grid">
            <Navbar sigle="ISI" ecole="Institut Supérieur d'Informatique" />
            <div className="flex flex-row w-[100%]">
                <Sidebar actif="departements" />
                <div className="relative left-[10%] px-12 py-4 w-[80%] mx-auto">
                    <div className="flex justify-between">
                        <div className="mb-7">
                            <h1 className="text-2xl font-semibold m-0">
                                Détails Départements
                            </h1>
                            <span className="text-md font-light tracking-[.10em] m-0">
                                Département Informatique
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
                    <div className="grid grid-cols-2 gap-4 content-start">
                        <div className="grid gap-4">
                            <div className="flex justify-between rounded-xl bg-white py-2 px-6 max-h-12 group">
                                <h3 className="text-xl text-main-blue">
                                    Département Informatique
                                    <input
                                        type="text"
                                        name="nomDepartement"
                                        className="w-full border border-slate-300 hidden rounded-xl"
                                        value={nom}
                                        onChange={(e) => setNom(e.target.value)}
                                    />
                                </h3>
                                <span className="hidden group-hover:block">
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
                                    <h2 className="text-[20px] text-main-blue">
                                        Description
                                    </h2>
                                    <span className="hidden group-hover:block">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512"
                                            className="w-4 h-4 fill-main-blue"
                                        >
                                            <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                                        </svg>
                                    </span>
                                </div>
                                <p className="text-slate-500 text-[14px]">
                                    Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Deserunt expedita
                                    aspernatur quidem in accusantium. Lorem
                                    ipsum dolor sit amet consectetur,
                                    adipisicing elit. Deserunt expedita
                                    aspernatur quidem in accusantium.
                                </p>
                            </div>
                        </div>
                        <div className="grid">
                            <div className="flex justify-between rounded-t-xl bg-main-blue py-3 px-6">
                                <h3 className="text-[17px] text-white">
                                    Filières du département: Département
                                    Informatique
                                </h3>
                            </div>
                            <div className="grid bg-white rounded-b-xl">
                                <ul>
                                    <li className="group flex justify-between text-[15px] px-6 border-t border-slate-200 py-3">
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
                                    <li className="group flex justify-between text-[15px] px-6 border-t border-slate-200 py-3">
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
                                    <li className="group flex justify-between text-[15px] px-6 border-t border-slate-200 py-3">
                                        Informatique Appliqué à la Gestion des
                                        Entreprises
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
            </div>
        </div>
    );
}

export default DetailsFiliere;
