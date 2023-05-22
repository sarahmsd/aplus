import Menu from "./Menu";
import logo from "../assets/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg";
import Footer from "./Footer";
import { useEffect, useState } from "react";
import axios from "axios";

function Home() {
    const [ecoles, setEcoles] = useState([]);
    const [q, setq] = useState("");

    const api = axios.create({
        baseURL: "http://127.0.0.1:8000",
        headers: {
            "Content-Type": "application/json",
        },
    });

    const search = (e) => {
        e.preventDefault();
        axios
            .get(`api/search/${q}`)
            .then((response) => {
                let r = response.data;
                window.location.href = "/login";
            })
            .catch((e) => console.log("e", e.message));
    };
    useEffect(() => {
        const getEcoles = async () => {
            try {
                const response = await axios.get("/api/lastEcoles");
                setEcoles(response.data); // Faites quelque chose avec les données reçues
            } catch (error) {
                console.error(error);
            }
        };
        getEcoles();
    }, []);

    return (
        <div className="grid">
            <Menu />
            <div className="grid mt-[15%]">
                <form method="get" className="w-full" onSubmit={search}>
                    <div className="flex justify-center">
                        <input
                            type="text"
                            name="q"
                            value={q}
                            onChange={(e) => setq(e.target.value)}
                            placeholder="Recherchez une école ou une formation..."
                            className="bg-white rounded-full px-8 py-[12px] w-[50%] text-md text-main-darken placeholder:text-slate-400 placeholder:text-md focus:outline-blue-100"
                        />
                        <button className="bg-main-blue rounded-full py-[8px] px-3 text-center ml-[-3.5%]">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                className="h-[24px] w-[24px] fill-white"
                            >
                                <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <div className="grid py-12 gap-3">
                <h1 className="text-md text-main-darken font-light m-auto">
                    Recherches rapides
                </h1>
                <div className="flex flex-auto m-auto gap-3">
                    <button className="bg-white px-4 py-2 font-light text-md text-slate-500 border border-slate-300 rounded-full">
                        ISM
                    </button>
                    <button className="bg-white px-4 py-2 font-light text-md text-slate-500 border border-slate-300 rounded-full">
                        SUPDECO
                    </button>
                    <button className="bg-white px-4 py-2 font-light text-md text-slate-500 border border-slate-300 rounded-full">
                        ENP Dakar
                    </button>
                </div>
            </div>
            <div className="mx-auto my-[10%] border-t border-slate-300 px-5 py-3">
                <ul className="flex flex-auto gap-4">
                    <li className="text-main-darken text-xl font-light">
                        Ecoles
                    </li>
                    <li className="text-main-darken text-xl font-light">
                        Emplois
                    </li>
                    <li className="text-main-darken text-xl font-light">
                        Projets
                    </li>
                    <li className="text-main-darken text-xl font-light">
                        Infos Pratiques
                    </li>
                </ul>
            </div>
            <div className="grid gap-10 pb-28 pt-12">
                <h1 className="text-main-blue text-xl font-semibold mx-auto mb-4">
                    Les écoles les plus récentes
                </h1>
                <div className="flex flex-wrap justify-start w-full px-20 gap-4">
                    {ecoles &&
                        ecoles.map((ecole) => (
                            <div
                                key={ecole.id}
                                className="flex justify-between px-4 py-3 rounded-2xl border-t-2 border-main-blue w-[32%] md:w-[48%] xl:w-[32%] sm:w-full bg-white"
                            >
                                <div className="grid">
                                    <h1 className="text-main-darken font-semibold text-md">
                                        {ecole.ecole.slice(0, 70)}...
                                    </h1>
                                    <h2 className="text-md font-extralight text-main-blue">
                                        {ecole.sigle}
                                    </h2>
                                    <div className="flex justify-between">
                                        <span className="text-main-blue font-extralight text-md">
                                            {ecole.adresse && ecole.adresse.slice(0, 20)}...
                                        </span>
                                        <span className="text-main-blue font-extralight text-md">
                                            {ecole.etablissement}
                                        </span>
                                    </div>
                                </div>
                                <div className="">
                                    <img
                                        src={logo}
                                        className="w-[50px] h-[50px] max-w-[60px] rounded-full"
                                    />
                                </div>
                            </div>
                        ))}
                </div>
            </div>
            <Footer />
        </div>
    );
}

export default Home;
