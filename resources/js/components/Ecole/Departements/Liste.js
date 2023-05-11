import { Link } from "react-router-dom";
import Navbar from "../Navbar";
import Sidebar from "../Sidebar";

function Liste({ ecole }) {
    /*     const [ecole, setEcole] = useState("");
     */
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
                            <button className="border-2 border-main-blue rounded-full text-main-blue px-8 py-2 mr-4">
                                Ajouter un département
                            </button>
                            <button className="border-2 border-yellow rounded-full text-yellow px-8 py-2">
                                Voir ma page en ligne
                            </button>
                        </div>
                    </div>
                    <div className="bg-white rounded grid">
                        <div className="flex justify-between p-4 gap-2">
                            <input
                                type="text"
                                className="border rounded-full px-4 py-2 w-[29%]"
                                placeholder="Filtrer"
                            />
                            <input
                                type="text"
                                className="border rounded-full px-4 py-2 w-[71%]"
                                placeholder="Rechercher un département"
                            />
                        </div>
                        <table className="w-[100%]">
                            <thead className="bg-main-blue p-12">
                                <tr className="my-2 ">
                                    <th className="text-white font-extralight text-xl py-3 px-8 border-r border-slate-200">
                                        Nom Département
                                    </th>
                                    <th className="text-white font-extralight text-xl py-3 px-8 border-r border-slate-200">
                                        Description
                                    </th>
                                    <th className="text-white font-extralight text-xl py-3 px-8">
                                        Filières
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr className="border-t border-slate-200 w-[100%]">
                                    <td className="py-4 w-[20%] px-8 border-r border-slate-200">
                                        {/* <Link to="/"> */}
                                            <h2 className="text-main-color font-medium text-[14px]">
                                                Département Informatique
                                            </h2>
                                        {/* </Link> */}
                                    </td>
                                    <td className="py-4 w-[25%] px-8 border-r border-slate-200">
                                        <span className="text-main-color text-[13px] text-[#091D37]">
                                            Hi, I’m Alec Thompson, Decisions: If
                                            you can’t decide, ...
                                        </span>
                                    </td>
                                    <td className="py-4 w-[20%] px-8">
                                        <span className="text-main-color text-[13px] text-[#091D37]">
                                            Génie logiciel, Réseaux Informatique
                                            ....
                                        </span>
                                    </td>
                                </tr>
                                <tr className="border-t border-slate-200 w-[100%]">
                                    <td className="py-4 w-[20%] px-8 border-r border-slate-200">
                                        <h2 className="text-main-color font-medium text-[14px]">
                                            Département Informatique
                                        </h2>
                                    </td>
                                    <td className="py-4 w-[25%] px-8 border-r border-slate-200">
                                        <span className="text-main-color text-[13px] text-[#091D37]">
                                            Hi, I’m Alec Thompson, Decisions: If
                                            you can’t decide, ...
                                        </span>
                                    </td>
                                    <td className="py-4 w-[20%] px-8">
                                        <span className="text-main-color text-[13px] text-[#091D37]">
                                            Génie logiciel, Réseaux Informatique
                                            ....
                                        </span>
                                    </td>
                                </tr>
                                <tr className="border-t border-slate-200 w-[100%]">
                                    <td className="py-4 w-[20%] px-8 border-r border-slate-200">
                                        <h2 className="text-main-color font-medium text-[14px]">
                                            Département Informatique
                                        </h2>
                                    </td>
                                    <td className="py-4 w-[25%] px-8 border-r border-slate-200">
                                        <span className="text-main-color text-[13px] text-[#091D37]">
                                            Hi, I’m Alec Thompson, Decisions: If
                                            you can’t decide, ...
                                        </span>
                                    </td>
                                    <td className="py-4 w-[20%] px-8">
                                        <span className="text-main-color text-[13px] text-[#091D37]">
                                            Génie logiciel, Réseaux Informatique
                                            ....
                                        </span>
                                    </td>
                                </tr>
                                <tr className="border-t border-slate-200 w-[100%]">
                                    <td className="py-4 w-[20%] px-8 border-r border-slate-200">
                                        <h2 className="text-main-color font-medium text-[14px]">
                                            Département Informatique
                                        </h2>
                                    </td>
                                    <td className="py-4 w-[25%] px-8 border-r border-slate-200">
                                        <span className="text-main-color text-[13px] text-[#091D37]">
                                            Hi, I’m Alec Thompson, Decisions: If
                                            you can’t decide, ...
                                        </span>
                                    </td>
                                    <td className="py-4 w-[20%] px-8">
                                        <span className="text-main-color text-[13px] text-[#091D37]">
                                            Génie logiciel, Réseaux Informatique
                                            ....
                                        </span>
                                    </td>
                                </tr>
                                <tr className="border-t border-slate-200 w-[100%]">
                                    <td className="py-4 w-[20%] px-8 border-r border-slate-200">
                                        <h2 className="text-main-color font-medium text-[14px]">
                                            Département Informatique
                                        </h2>
                                    </td>
                                    <td className="py-4 w-[25%] px-8 border-r border-slate-200">
                                        <span className="text-main-color text-[13px] text-[#091D37]">
                                            Hi, I’m Alec Thompson, Decisions: If
                                            you can’t decide, ...
                                        </span>
                                    </td>
                                    <td className="py-4 w-[20%] px-8">
                                        <span className="text-main-color text-[13px] text-[#091D37]">
                                            Génie logiciel, Réseaux Informatique
                                            ....
                                        </span>
                                    </td>
                                </tr>
                                <tr className="border-t border-slate-200 w-[100%]">
                                    <td className="py-4 w-[20%] px-8 border-r border-slate-200">
                                        <h2 className="text-main-color font-medium text-[14px]">
                                            Département Informatique
                                        </h2>
                                    </td>
                                    <td className="py-4 w-[25%] px-8 border-r border-slate-200">
                                        <span className="text-main-color text-[13px] text-[#091D37]">
                                            Hi, I’m Alec Thompson, Decisions: If
                                            you can’t decide, ...
                                        </span>
                                    </td>
                                    <td className="py-4 w-[20%] px-8">
                                        <span className="text-main-color text-[13px] text-[#091D37]">
                                            Génie logiciel, Réseaux Informatique
                                            ....
                                        </span>
                                    </td>
                                </tr>
                                <tr className="border-t border-slate-200 w-[100%]">
                                    <td className="py-4 w-[20%] px-8 border-r border-slate-200">
                                        <h2 className="text-main-color font-medium text-[14px]">
                                            Département Informatique
                                        </h2>
                                    </td>
                                    <td className="py-4 w-[25%] px-8 border-r border-slate-200">
                                        <span className="text-main-color text-[13px] text-[#091D37]">
                                            Hi, I’m Alec Thompson, Decisions: If
                                            you can’t decide, ...
                                        </span>
                                    </td>
                                    <td className="py-4 w-[20%] px-8">
                                        <span className="text-main-color text-[13px] text-[#091D37]">
                                            Génie logiciel, Réseaux Informatique
                                            ....
                                        </span>
                                    </td>
                                </tr>
                                <tr className="border-t border-slate-200 w-[100%]">
                                    <td className="py-4 w-[20%] px-8 border-r border-slate-200">
                                        <h2 className="text-main-color font-medium text-[14px]">
                                            Département Informatique
                                        </h2>
                                    </td>
                                    <td className="py-4 w-[25%] px-8 border-r border-slate-200">
                                        <span className="text-main-color text-[13px] text-[#091D37]">
                                            Hi, I’m Alec Thompson, Decisions: If
                                            you can’t decide, ...
                                        </span>
                                    </td>
                                    <td className="py-4 w-[20%] px-8">
                                        <span className="text-main-color text-[13px] text-[#091D37]">
                                            Génie logiciel, Réseaux Informatique
                                            ....
                                        </span>
                                    </td>
                                </tr>
                                <tr className="border-t border-slate-200 w-[100%]">
                                    <td className="py-4 w-[20%] px-8 border-r border-slate-200">
                                        <h2 className="text-main-color font-medium text-[14px]">
                                            Département Informatique
                                        </h2>
                                    </td>
                                    <td className="py-4 w-[25%] px-8 border-r border-slate-200">
                                        <span className="text-main-color text-[13px] text-[#091D37]">
                                            Hi, I’m Alec Thompson, Decisions: If
                                            you can’t decide, ...
                                        </span>
                                    </td>
                                    <td className="py-4 w-[20%] px-8">
                                        <span className="text-main-color text-[13px] text-[#091D37]">
                                            Génie logiciel, Réseaux Informatique
                                            ....
                                        </span>
                                    </td>
                                </tr>
                                <tr className="border-t border-slate-200 w-[100%]">
                                    <td className="py-4 w-[20%] px-8 border-r border-slate-200">
                                        <h2 className="text-main-color font-medium text-[14px]">
                                            Département Informatique
                                        </h2>
                                    </td>
                                    <td className="py-4 w-[25%] px-8 border-r border-slate-200">
                                        <span className="text-main-color text-[13px] text-[#091D37]">
                                            Hi, I’m Alec Thompson, Decisions: If
                                            you can’t decide, ...
                                        </span>
                                    </td>
                                    <td className="py-4 w-[20%] px-8">
                                        <span className="text-main-color text-[13px] text-[#091D37]">
                                            Génie logiciel, Réseaux Informatique
                                            ....
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
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
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Liste;
