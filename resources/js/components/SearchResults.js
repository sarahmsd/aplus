import Menu from "./Menu";
import logo from "../assets/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg";

function SearchResults() {
    
    useEffect(() => {
        const getEcoles = async () => {
            try {
                const response = await axios.get("/api/ecoles");
                setEcoles(response.data); // Faites quelque chose avec les données reçues
            } catch (error) {
                console.error(error);
            }
        };
        getEcoles();
      
    }, [])
    
    return (
        <>
            <Menu search_bar="true" />
            <div className="grid grid-rows-2 gap-4 p-12">
                <div className="grid w-[80%] gap-4">
                    <div className="flex justify-between bg-white rounded-lg p-8">
                        <div className="flex justify-start gap-3">
                            <div>
                                <img
                                    src={logo}
                                    className="w-[40px] h-[40px] rounded-full"
                                />
                            </div>
                            <div className="grid gap-2 h-fit">
                                <h1 className="text-[17px] text-main-darken font-bold">
                                    Ecole Polytechnique de Dakar EPD
                                </h1>
                                <div className="flex justify-start gap-3 h-fit">
                                    <div className="flex justify-between">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512"
                                            className="w-[20px] h-[17px] fill-slate-700"
                                        >
                                            <path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
                                        </svg>
                                        <span className="text-slate-800 font-light text-md">
                                            epd@epd.com
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
                                            Cité Gorgui 2040
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
                                            784332132
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="grid gap-3">
                            <div className="flex justify-end gap-2">
                                <span className="bg-[#f4f4f4] rounded-xl px-4 py-2 text-[#040d18] text-sm h-fit">
                                    S.E. Français
                                </span>
                                <span className="bg-[#f4f4f4] rounded-xl px-4 py-2 text-[#040d18] text-sm h-fit">
                                    Ens. Supérieur
                                </span>
                                <span className="bg-[#f4f4f4] rounded-xl px-4 py-2 text-[#040d18] text-sm h-fit">
                                    Etb. Privé
                                </span>
                            </div>
                            <div className="flex justify-end gap-2">
                                <span className="rounded-full border border-main-darken px-2 py-1 text-main-darken text-sm h-fit">
                                    Licence 1
                                </span>
                                <span className="rounded-full border border-main-darken px-2 py-1 text-main-darken text-sm h-fit">
                                    Licence 2
                                </span>
                                <span className="rounded-full border border-main-darken px-2 py-1 text-main-darken text-sm h-fit">
                                    Licence 3
                                </span>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div className="grid w-[10%]"></div>
            </div>
        </>
    );
}
export default SearchResults;
