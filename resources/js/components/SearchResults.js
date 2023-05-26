import Menu from "./Menu";
import logo from "../assets/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg";
import { useEffect, useState } from "react";

function SearchResults() {
    const [ecoles, setEcoles] = useState([]);
    const [ens, setEns] = useState([]);

    const home = (e) => {
        const url = new URL(`http://localhost:8000/api/ecole/`);
        url.searchParams.set('id', e.id);
        window.location.assign(url.toString());
    }

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
    }, []);

    return (
        <>
            <Menu search_bar="true" />
            <div className="flex justify-between gap-3 p-12 w-full">
                <div className="grid w-[80%] gap-2">
                    {ecoles &&
                        ecoles.map((ecole) => (
                            <div
                                key={ecole.id}
                                className="group flex justify-between bg-white hover:bg-slate-200 rounded-lg px-8 py-3 cursor-pointer"
                            >
                                <div className="flex justify-start gap-3">                                    
                                    <div className="grid gap-2 h-fit">
                                        <div className="flex justify-start gap-2" onClick={() => home(ecole)}>
                                            <h1 className="my-auto text-md text-main-darken font-bold group-hover:text-blue-500">{ecole.ecole && ecole.ecole.slice(0, 20)}...</h1>
                                            <span className="my-auto text-md text-main-blue font-bold group-hover:text-blue-500">{ecole.sigle && ecole.sigle.slice(0, 10)}...</span>                                           
                                        </div>
                                        <div className="flex justify-start gap-3 h-fit">
                                            <div className="flex justify-between">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512"
                                                    className="my-auto w-4 h-4 fill-slate-300 hover:fill-yellow"
                                                >
                                                    <path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
                                                </svg>
                                                <span className="text-slate-400 font-light text-sm ml-2 hover:text-yellow">
                                                    {ecole.email && ecole.email.slice(0, 20)}
                                                </span>
                                            </div>
                                            <div className="flex justify-between">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512"
                                                    className="my-auto w-4 h-4 fill-slate-300 hover:fill-yellow"
                                                >
                                                    <path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
                                                </svg>
                                                <span className="text-slate-400 font-light text-sm ml-2 hover:text-yellow">
                                                    {ecole.adresse && ecole.adresse.slice(0, 20)}
                                                </span>
                                            </div>
                                            <div className="flex justify-between">
                                                <svg 
                                                    xmlns="http://www.w3.org/2000/svg" 
                                                    viewBox="0 0 512 512"
                                                    className="my-auto w-4 h-4 fill-slate-300 hover:fill-yellow "
                                                    >
                                                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                                                </svg>
                                                <span className="text-slate-400 font-light text-sm ml-2 hover:text-yellow">
                                                    {ecole.telephone}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="grid gap-3 h-fit">
                                    <div className="flex justify-end gap-2">
                                        <span className="bg-[#f4f4f4] hover:bg-blue-100 rounded-xl px-2 py-1 text-slate-500 text-[10px] h-fit">
                                            S.E.{" "}
                                            {ecole.systemeEducatif_id === 1
                                                ? "Français"
                                                : ecole.systemeEducatif_id === 2
                                                ? "Anglais US"
                                                : "Anglais UK"}
                                        </span>
                                        <span className="bg-[#f4f4f4] hover:bg-blue-100 rounded-xl px-2 py-1 text-slate-500 text-[10px] h-fit">
                                            Etb. {ecole.etablissement}
                                        </span>
                                    </div>
                                    <div className="flex justify-end gap-2">
                                        {ecole.enseignements &&
                                            ecole.enseignements.map(
                                                (ens, index) =>
                                                    index <= 3 && (
                                                        <span className="rounded-full border border-main-darken hover:bg-blue-100 px-3 py-1 text-main-darken text-[10px] h-fit">
                                                            {
                                                                ens.enseignement
                                                            }
                                                        </span>
                                                    )
                                            )}
                                    </div>
                                </div>
                                {/* <div className="absolute -mt-7  -ml-10">
                                    <img
                                        src={logo}
                                        className="w-6 h-6 rounded-full"
                                    />
                                </div> */}
                            </div>
                        ))}
                </div>
                <div className="grid w-[20%] gap-2 h-fit">
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
