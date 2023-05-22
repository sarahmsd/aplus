import Menu from "./Menu";
import logo from "../assets/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg";
import { useEffect, useState } from "react";

function SearchResults() {
    const [ecoles, setEcoles] = useState([]);
    const [ens, setEns] = useState([]);

    useEffect(() => {
        const getEcoles = async () => {
            try {
                const response = await axios.get("/api/ecoles");
                setEcoles(response.data);
            } catch (error) {
                console.error(error);
            }
        };
        getEcoles();
      
    }, [])
    
    return (
        <>
            <Menu search_bar="true" />
            <div className="flex justify-between gap-3 p-12 w-full">
                <div className="grid w-[80%] gap-4">
                    {ecoles && ecoles.map((ecole) => (
                    <div key={ecole.id} className="flex justify-between bg-[#fff] rounded-lg p-8 h-fit">
                        <div className="flex justify-start gap-3">
                            <div>
                                <img
                                    src={logo}
                                    className="w-[40px] h-[40px] rounded-full"
                                />
                            </div>
                            <div className="grid gap-2 h-fit">
                                <h1 className="text-[17px] text-main-darken font-bold">
                                    {ecole.ecole.slice(0, 20)}... {ecole.sigle.slice(0,5)}
                                </h1>
                                <div className="flex flex-wrap justify-start gap-2 h-fit">
                                    <div className="flex justify-between">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512"
                                            className="w-[20px] h-[17px] fill-slate-700"
                                        >
                                            <path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
                                        </svg>
                                        <span className="text-slate-800 font-light text-md">
                                            {ecole.email}
                                        </span>
                                    </div>
                                    <div className="flex justify-between">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512"
                                            className="w-[20px] h-[17px] fill-slate-700"
                                        >
                                            <path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
                                        </svg>
                                        <span className="text-slate-800 font-light text-md">
                                            {ecole.adresse.slice(0,10)}
                                        </span>
                                    </div>
                                    <div className="flex justify-between">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512"
                                            className="w-[20px] h-[17px] fill-slate-700"
                                        >
                                            <path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
                                        </svg>
                                        <span className="text-slate-800 font-light text-md">
                                            {ecole.telephone}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="grid gap-3 h-fit">
                            <div className="flex flex-wrap justify-end gap-2">
                                <span className="bg-[#f4f4f4] rounded-xl px-2 py-1 text-[#040d18] text-sm h-fit">
                                    S.E. {ecole.systemeEducatif_id === 1 ? 'Français' : (ecole.systemeEducatif_id === 2 ? 'Anglais US' : 'Anglais UK')}
                                </span>
                                <span className="bg-[#f4f4f4] rounded-xl px-2 py-1 text-[#040d18] text-sm h-fit">
                                    Ens.{}
                                </span>
                                <span className="bg-[#f4f4f4] rounded-xl px-2 py-1 text-[#040d18] text-sm h-fit">
                                    Etb. {ecole.etablissement}
                                </span>
                            </div>
                            <div className="flex flex-wrap justify-end gap-2">
                                {ecole.ecoleens && ecole.ecoleens.map((ens, index) => (
                                    index <= 3 &&
                                    <span className="rounded-full border border-main-darken px-2 py-1 text-main-darken text-sm h-fit">
                                        {ens.enseignement_id}
                                    </span>
                                ))}                                
                            </div>
                        </div>
                    </div> 
                    ))}                                       
                </div>
                <div className="grid w-[20%] gap-2">
                    <div className="bg-white rounded-md px-4 py-3 grid gap-2 h-fit">
                        <h2 className="text-[12px] text-slate-900">Filtrer par établissement</h2>
                        <ul className="flex justify-start gap-2">
                            <li className="text-sm text-slate-700 font-light">
                                <input type="checkbox" name="public" className="checked:bg-blue-500 mr-1" />
                                <span className="text-slate-400 text-[12px]">Public</span>
                            </li>
                            <li className="text-sm text-slate-700 font-light">
                                <input type="checkbox" name="prive" className="checked:bg-blue-500 mr-1" />
                                <span className="text-slate-400 text-[12px]">Prive</span>
                            </li>
                        </ul>
                    </div>
                    <div className="bg-white rounded-md px-4 py-3 grid gap-2 h-fit">
                        <h2 className="text-[12px] text-slate-900">Filtrer par S.Educatif</h2>
                        <ul className="flex justify-start gap-2">
                            <li className="text-sm text-slate-700 font-light">
                                <input type="checkbox" name="fr" className="checked:bg-blue-500 mr-1" />
                                <span className="text-slate-400 text-[12px]">FR</span>
                            </li>
                            <li className="text-sm text-slate-700 font-light">
                                <input type="checkbox" name="prive" className="checked:bg-blue-500 mr-1" />
                                <span className="text-slate-400 text-[12px]">US</span>
                            </li>
                            <li className="text-sm text-slate-700 font-light">
                                <input type="checkbox" name="prive" className="checked:bg-blue-500 mr-1" />
                                <span className="text-slate-400 text-[12px]">UK</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </>
    );
}
export default SearchResults;
