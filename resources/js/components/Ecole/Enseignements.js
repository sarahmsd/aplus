import Navbar from "./Navbar";
import Sidebar from "./Sidebar";

function Enseignements() {
    return (
        <div className="grid">
            <Navbar sigle="ISI" ecole="Institut Supérieur d'Informatique" />
            <div className="flex flex-row w-[100%]">
                <Sidebar actif="departements" />
                <div className="relative left-[10%] px-12 py-4 w-[80%] mx-auto">
                    <div className="group grid gap-4 bg-white rounded py-4 px-8 mb-4">
                        <div className="flex justify-between">
                            <div className="grid">
                                <h3 className="text-[#0B2242] text-[20px]">
                                    Enseignement Supérieur
                                </h3>
                                <p className="text-text">
                                    Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit.
                                </p>
                            </div>
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
                        <div className="flex justify-auto gap-4">
                            <span className="bg-slate-200 py-2 px-8 rounded-full">
                                Licence 1
                            </span>
                            <span className="bg-slate-200 py-2 px-8 rounded-full">
                                Licence 2
                            </span>
                            <span className="bg-slate-200 py-2 px-8 rounded-full">
                                Licence 3
                            </span>
                            <span className="bg-slate-200 py-2 px-8 rounded-full">
                                Master 1
                            </span>
                            <span className="bg-slate-200 py-2 px-8 rounded-full">
                                Master 2
                            </span>
                            <span className="bg-slate-200 py-2 px-8 rounded-full">
                                Doctorat 1
                            </span>
                            <span className="bg-slate-200 py-2 px-8 rounded-full">
                                Doctorat 2
                            </span>
                        </div>
                    </div>
                    <div className="grid grid-cols-2 gap-4">
                        <div className="group grid gap-4 bg-white rounded py-4 px-8 mb-4 max-h-fit">
                            <div className="flex justify-between">
                                <div className="grid">
                                    <h3 className="text-[#0B2242] text-[20px]">
                                        Enseignement Secondaire
                                    </h3>
                                    <p className="text-[#878484]">
                                        Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit.
                                    </p>
                                </div>
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
                            <div className="flex flex-wrap justify-auto gap-4">
                                <span className="bg-slate-200 py-2 px-8 rounded-full h-fit">
                                    Première
                                </span>
                                <span className="bg-slate-200 py-2 px-8 rounded-full h-fit">
                                    Seconde
                                </span>
                                <span className="bg-slate-200 py-2 px-8 rounded-full h-fit">
                                    Terminale
                                </span>
                            </div>
                        </div>                        
                        <div className="group grid gap-4 bg-white rounded py-4 px-8 mb-4 w-fit">
                            <div className="flex justify-between">
                                <div className="grid">
                                    <h3 className="text-[#0B2242] text-[20px]">
                                        Enseignement Pré-élementaire
                                    </h3>
                                    <p className="text-[#878484]">
                                        Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit.
                                    </p>
                                </div>
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
                            <div className="flex justify-auto gap-4">
                                <span className="bg-slate-200 py-2 px-8 rounded-full">
                                    Pte. Section
                                </span>
                                <span className="bg-slate-200 py-2 px-8 rounded-full">
                                    Mye. Section
                                </span>
                                <span className="bg-slate-200 py-2 px-8 rounded-full">
                                    Gde. Section
                                </span>
                            </div>
                        </div>                        
                    </div> 
                    <div className="group grid gap-4 bg-white rounded py-4 px-8 mb-4 w-1/2">
                        <div className="flex justify-between">
                            <div className="grid">
                                <h3 className="text-[#0B2242] text-[20px]">
                                    Enseignement Elémentaire
                                </h3>
                                <p className="text-[#878484]">
                                    Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit.
                                </p>
                            </div>
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
                        <div className="flex flex-wrap justify-auto gap-4">
                            <span className="bg-slate-200 py-2 px-8 rounded-full">
                                Troisième
                            </span>
                            <span className="bg-slate-200 py-2 px-8 rounded-full">
                                Quatrième
                            </span>
                            <span className="bg-slate-200 py-2 px-8 rounded-full">
                                Cinquième
                            </span>
                            <span className="bg-slate-200 py-2 px-8 rounded-full">
                                Sixième
                            </span>
                        </div>
                    </div>                   
                </div>
            </div>
        </div>
    );
}

export default Enseignements;
