import axios from "axios";
import { useState } from "react";
import Navbar from "./Ecole/Navbar";
import Sidebar from "./Ecole/Sidebar";

function Dashboard() {
    const [ecole, setEcole] = useState("");
    const [enseignements, setEnseignements] = useState([]);

    axios
        .get("/api/dData")
        .then((response) => {
            setEcole(response.data.ecole);
        })
        .catch((error) => {
            console.log(error);
        });
    return (
        <div className="grid">
            <Navbar sigle={ecole.sigle} ecole={ecole.ecole} />
            <div className="flex flex-row w-[100%]">
                <Sidebar />
                <div className="relative left-[10%] px-12 py-4 w-[80%] mx-auto">
                    <div className="mb-7">
                        <h1 className="text-2xl font-semibold m-0">Dashboard</h1>
                        <span className="text-md font-light tracking-[.30em] m-0">Mon dashboard</span>
                    </div>
                    <div className="flex flex-row gap-7 mb-7">
                        <div className="bg-white w-[25%] py-2 px-6 gap-4 flex flex-row rounded">
                            <div className="grid">
                                <h1 className="text-xl font-medium">
                                    Départements
                                </h1>
                                <span className="text-2xl font-bold">20</span>
                            </div>
                            <div className="flex justify-end py-2 px-3 bg-main-blue m-auto rounded-md">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                    className="h-6 w-6 my-auto fill-white "
                                >
                                    <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zM256 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                                </svg>
                            </div>
                        </div>
                        <div className="bg-white w-[25%] py-2 px-6 gap-4 flex flex-row rounded">
                            <div className="grid">
                                <h1 className="text-xl font-medium">
                                    Filières
                                </h1>
                                <span className="text-2xl font-bold">37</span>
                            </div>
                            <div className="flex justify-end py-2 px-3 bg-main-blue m-auto rounded-md">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                    className="h-6 w-6 my-auto fill-white "
                                >
                                    <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zM256 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                                </svg>
                            </div>
                        </div>
                        <div className="bg-white w-[25%] py-2 px-6 gap-4 flex flex-row rounded">
                            <div className="grid">
                                <h1 className="text-xl font-medium">
                                    Enseignements
                                </h1>
                                <span className="text-2xl font-bold">3</span>
                            </div>
                            <div className="flex justify-end py-2 px-3 bg-main-blue m-auto rounded-md">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                    className="h-6 w-6 my-auto fill-white "
                                >
                                    <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zM256 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                                </svg>
                            </div>
                        </div>
                        <div className="bg-white w-[25%] py-2 px-6 gap-4 flex flex-row rounded">
                            <div className="grid">
                                <h1 className="text-xl font-medium">
                                    Cycles
                                </h1>
                                <span className="text-2xl font-bold">10</span>
                            </div>
                            <div className="flex justify-end py-2 px-3 bg-main-blue m-auto rounded-md">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                    className="h-6 w-6 my-auto fill-white "
                                >
                                    <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zM256 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div className="grid grid-rows-2 grid-cols-3 grid-flow-col gap-4">
                        <div className="col-span-2 bg-white rounded py-2 px-6">
                            <div className="mb-4">
                                <h3 className="text-xl font-medium">Départements</h3>
                                <span className="font-light tracking-[.25em]">Ajoutés recemment</span>
                            </div>
                            <table className="w-full">
                                <thead className="">
                                    <tr>
                                        <th className="text-slate-500 font-extralight">Nom du département</th>
                                        <th className="text-slate-500 font-extralight">Annexe</th>
                                        <th className="text-slate-500 font-extralight">Nombre de filières</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr className="border-t border-slate-200 w-[100%]">
                                        <td className="py-3 w-[50%]">
                                            <h2 className="text-main-color font-medium text-[14px]">Département Informatique</h2>
                                        </td>
                                        <td className="py-3 w-[30%]">
                                            <h2 className="font-medium text-[14px]">ISI Siège</h2>
                                        </td>
                                        <td className="py-3 w-[20%]">
                                            <h2 className="font-light text-[14px] text-center">7</h2>
                                        </td>
                                    </tr>
                                    <tr className="border-t border-slate-200 w-[100%]">
                                        <td className="py-3 w-[50%]">
                                            <h2 className="text-main-color font-medium text-[14px]">Département Informatique</h2>
                                        </td>
                                        <td className="py-3 w-[30%]">
                                            <h2 className="font-medium text-[14px]">ISI Siège</h2>
                                        </td>
                                        <td className="py-3 w-[20%]">
                                            <h2 className="font-light text-[14px] text-center">7</h2>
                                        </td>
                                    </tr>
                                    <tr className="border-t border-slate-200 w-[100%]">
                                        <td className="py-3 w-[50%]">
                                            <h2 className="text-main-color font-medium text-[14px]">Département Informatique</h2>
                                        </td>
                                        <td className="py-3 w-[30%]">
                                            <h2 className="font-medium text-[14px]">ISI Siège</h2>
                                        </td>
                                        <td className="py-3 w-[20%]">
                                            <h2 className="font-light text-[14px] text-center">7</h2>
                                        </td>
                                    </tr>
                                    <tr className="border-t border-slate-200 w-[100%]">
                                        <td className="py-3 w-[50%]">
                                            <h2 className="text-main-color font-medium text-[14px]">Département Informatique</h2>
                                        </td>
                                        <td className="py-3 w-[30%]">
                                            <h2 className="font-medium text-[14px]">ISI Siège</h2>
                                        </td>
                                        <td className="py-3 w-[20%]">
                                            <h2 className="font-light text-[14px] text-center">7</h2>
                                        </td>
                                    </tr>
                                    <tr className="border-t border-slate-200 w-[100%]">
                                        <td className="py-3 w-[50%]">
                                            <h2 className="text-main-color font-medium text-[14px]">Département Informatique</h2>
                                        </td>
                                        <td className="py-3 w-[30%]">
                                            <h2 className="font-medium text-[14px]">ISI Siège</h2>
                                        </td>
                                        <td className="py-3 w-[20%]">
                                            <h2 className="font-light text-[14px] text-center">7</h2>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div className="bg-white py-2 px-6 rounded"></div>
                        <div className="bg-white py-2 px-6 rounded col-span-2 "></div>
                        <div className="bg-white py-2 px-6 rounded"></div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Dashboard;
