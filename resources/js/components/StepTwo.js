import { isEmpty } from "lodash";
import { useState } from "react";

function StepTwo({
    nextStep,
    prevStep,
    setError,
    error,
    setFormData,
    formData,
}) {
    const [profil, setProfil] = useState(formData.profil);
    const [cInputs, setCInputs] = useState(
        !isEmpty(formData.cInputs) ? formData.cInputs : []
    );
    const [entreprise, setEntreprise] = useState(
        formData.entreprise !== "" ? formData.entreprise : ""
    );
    const [ecole, setEcole] = useState(formData.ecole);
    const [sigle, setSigle] = useState(formData.sigle);
    const [etablissement, setEtablissement] = useState(formData.etablissement);
    const [nom, setNom] = useState(formData.nom);
    const [termes, setTermes] = useState(formData.termes);

    console.log("etabissement", etablissement);
    const errors = {
        message: "Vous devez choisir un profil avant de continuer!",
    };

    // Generate JSX code for error message
    const renderErrorMessage = (name) =>
        name === error.name && (
            <div className="text-red-600 text-center">{error.message}</div>
        );

    function handleSubmit(event) {
        event.preventDefault();
        if (profil !== "" && !isEmpty(cInputs) && termes !== "") {
            if (profil === "ecole") {
                const user = {
                    name: ecole,
                    email: formData.email,
                    password: formData.password,
                    password_confirmation: formData.confirmPassword,
                    profil: profil,
                    ecole: ecole,
                    sigle: sigle,
                    etablissement: etablissement,
                };
                submit(user);
            } else if (profil === "entreprise")
                nextStep({ profil, cInputs, entreprise, termes });
            else if (profil === "candidat")
                nextStep({ profil, cInputs, nom, termes });
        } else {
            setError({ name: "message", message: errors.message });
        }
    }

    function submit(data) {
        // CSRF COOKIE
        axios.get("sanctum/csrf-cookie").then((response) => {
            //LOGIN
            axios
                .post("/api/register", { data })
                .then((response) => {
                    console.log("response", response);
                    response.data.profil === "Ecole" &&
                        (window.location.href = "/api/dashboard");
                    response.data.profil === "Candidat" &&
                        console.log("profil", response.data.profil);
                })
                .catch((error) => {
                    console.log("Jai echoue");
                    console.log("error", error);
                });
        });
    }

    const handleChange = (profil) => {
        setProfil(profil);
        setCInputs(conditionalInputs(profil));
        setError({ name: "message", message: "" });
    };

    function back(e) {
        if (!isEmpty(cInputs)) {
            if (profil === "ecole")
                prevStep({
                    profil,
                    cInputs,
                    ecole,
                    sigle,
                    etablissement,
                    termes,
                });
            else if (profil === "entreprise")
                prevStep({ profil, cInputs, entreprise, termes });
            else if (profil === "candidat")
                prevStep({ profil, cInputs, nom, termes });
        } else {
            prevStep({ profil, termes });
        }
    }

    const conditionalInputs = (profil) => {
        if (profil === "ecole") {
            setEntreprise("");
            setNom("");
            return [
                {
                    nom: "ecole",
                    type: "text",
                    placeholder: "Nom de l'etablissement",
                    value: ecole,
                },
                {
                    nom: "sigle",
                    type: "text",
                    placeholder: "Sigle de l'etablissement",
                    value: sigle,
                },
                {
                    nom: "etablissement",
                    type: "select",
                    placeholder: "Type d'etablissement",
                    value: etablissement,
                    selects: [
                        {
                            value: "prive",
                        },
                        {
                            value: "public",
                        },
                    ],
                },
            ];
        } else if (profil === "entreprise") {
            setEcole("");
            setSigle("");
            setEtablissement("");
            setNom("");
            return [
                {
                    nom: "entreprise",
                    type: "text",
                    placeholder: "Nom de l'entreprise",
                    value: { entreprise },
                },
            ];
        } else {
            setEcole("");
            setSigle("");
            setEtablissement("");
            setEntreprise("");
            return [
                {
                    nom: "nom",
                    type: "text",
                    placeholder: "Nom d'utilisateur",
                    value: nom,
                },
            ];
        }
    };

    const handleInput = (e) => {
        e.target.name === "entreprise" && setEntreprise(e.target.value);
        e.target.name === "nom" && setNom(e.target.value);
        e.target.name === "ecole" && setEcole(e.target.value);
        e.target.name === "sigle" && setSigle(e.target.value);
        e.target.name === "etablissement" && setEtablissement(e.target.value);
    };

    return (
        <form onSubmit={handleSubmit}>
            <div className="grid justify-center gap-6">
                {renderErrorMessage("message")}
                <label
                    htmlFor="ecole"
                    className="border px-4 pt-3 border-gray-300 rounded-full hover:bg-slate-200 w-[488px] h-[58px] flex gap-3 justify-items-start"
                >
                    <div>
                        <input
                            id="ecole"
                            type="radio"
                            name="profil"
                            className="w-6 h-6 border-gray-300 focus:ring-blue-500 peer"
                            value="ecole"
                            checked={profil == "ecole"}
                            onChange={() => handleChange("ecole")}
                        />
                    </div>
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 512"
                            height="24px"
                            width="24px"
                        >
                            <path
                                fill="#0A2345"
                                d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"
                            />
                        </svg>
                    </div>
                    <div className="text-[16px] font-light text-main-blue">
                        Ecole
                    </div>
                </label>
                <label
                    htmlFor="entreprise"
                    className="border px-4 pt-3 border-gray-300 rounded-full hover:bg-slate-200 w-[488px] h-[58px] flex gap-3 justify-items-start"
                >
                    <div>
                        <input
                            id="entreprise"
                            type="radio"
                            name="profil"
                            className="w-6 h-6 border-gray-300 focus:ring-blue-500 peer"
                            value="entreprise"
                            checked={profil == "entreprise"}
                            onChange={() => handleChange("entreprise")}
                        />
                    </div>
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 512"
                            height="24px"
                            width="24px"
                        >
                            <path
                                fill="#0A2345"
                                d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"
                            />
                        </svg>
                    </div>
                    <div className="text-[16px] font-light text-main-blue">
                        Entreprise
                    </div>
                </label>
                <label
                    htmlFor="candidat"
                    className="border px-4 pt-3 border-gray-300 rounded-full hover:bg-slate-200 w-[488px] h-[58px] flex gap-3 justify-items-start"
                >
                    <div>
                        <input
                            id="candidat"
                            type="radio"
                            name="profil"
                            className="w-6 h-6 border-gray-300 focus:ring-blue-500 peer"
                            value="candidat"
                            checked={profil == "candidat"}
                            onChange={() => handleChange("candidat")}
                        />
                    </div>
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 512"
                            height="24px"
                            width="24px"
                        >
                            <path
                                fill="#0A2345"
                                d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"
                            />
                        </svg>
                    </div>
                    <div className="text-[16px] font-light text-main-blue">
                        Candidat
                    </div>
                </label>
            </div>
            <hr className="w-full my-10" />
            <div className="grid justify-center gap-6">
                {cInputs.map((ci) =>
                    ci.type !== "select" ? (
                        <div className="w-[488px] h-[58px]" key={ci.nom}>
                            <input
                                type={ci.type}
                                name={ci.nom}
                                placeholder={ci.placeholder}
                                value={
                                    ci.nom === "entreprise"
                                        ? entreprise
                                        : ci.nom === "ecole"
                                        ? ecole
                                        : ci.nom === "sigle"
                                        ? sigle
                                        : nom
                                }
                                onChange={handleInput}
                                className="px-4 py-3 w-full bg-white border border-slate-200 rounded-full text-[16px] font-normal"
                            />
                        </div>
                    ) : (
                        <div className="w-[488px] h-[58px]" key={ci.nom}>
                            <select
                                className="px-4 py-3 w-full bg-white border border-slate-200 rounded-full text-[16px] font-normal"
                                name={ci.nom}
                                placeholder={ci.placeholder}
                                value={etablissement}
                                onChange={handleInput}
                            >
                                {ci.selects.map(({ value }) => (
                                    <option key={value} value={value}>
                                        {value}
                                    </option>
                                ))}
                            </select>
                        </div>
                    )
                )}
            </div>
            <div className="grid justify-center gap-6 mt-4">
                <div className="text-center text-main-blue text-[14px]">
                    <input
                        type="checkbox"
                        name="termes"
                        className="w-4 h-4 rounded-full border-gray-300 mr-2"
                        onChange={(e) => setTermes(e.target.checked)}
                        checked={termes}
                    />
                    Je confirme avoir lu et j'accepte les termes et conditions
                    d'utilisation.
                </div>
                <div className="mt-2 w-[488px] h-[58px]">
                    <button
                        type="submit"
                        className="text-white bg-main-blue w-full px-4 py-3 rounded-full text-[18px] font-medium"
                    >
                        Se connecter
                    </button>
                </div>
                <div
                    className="text-center text-gray-500 text-[16px]"
                    onClick={back}
                >
                    Retour
                </div>
                <div className="text-center text-gray-500 text-[16px]">
                    Déjà inscrit ?{" "}
                    <span className="text-main-blue underline font-bold">
                        Se connecter
                    </span>
                </div>
            </div>
        </form>
    );
}

export default StepTwo;
