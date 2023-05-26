import { createRoot } from "react-dom/client";
import Signin from "./Signin";
import Login from "./Login";
import Dashboard from "./Dashboard";
import { useState } from "react";
import Liste from "./Ecole/Departements/Liste";
import Details from "./Ecole/Departements/Details";
import Add from "./Ecole/Departements/Add";
import Enseignements from "./Ecole/Enseignements";
import Configuration from "./Ecole/Configuration";
import Home from "./Home";
import SearchResults from "./SearchResults";
import ListeFiliere from "./Ecole/Filieres/Liste";
import DetailsFiliere from "./Ecole/Filieres/Details";
import AddFiliere from "./Ecole/Filieres/Add";
import HomeEcole from "./Ecole/HomeEcole";
import Formation from "./Ecole/Formation";
import Activites from "./Ecole/Activites";
import DetailsActivite from "./Ecole/DetailsActivite";

function App() {
    const [user, setUser] = useState("");
    return <div></div>;
}
export default App;
const ecole = JSON.parse(localStorage.getItem("profil"));

const onlinepage = () => {
    const url = new URL(`http://localhost:8000/api/ecole/`);
    url.searchParams.set('id', ecole.id);
    window.location.assign(url.toString());
}

if (document.getElementById("home")) {
    const root = createRoot(document.getElementById("home"));
    root.render(<Home />);
}

if (document.getElementById("results")) {
    const root = createRoot(document.getElementById("results"));
    root.render(<SearchResults onlinepage={onlinepage} />);
}

if (document.getElementById("register")) {
    const root = createRoot(document.getElementById("register"));
    root.render(<Signin />);
}

if (document.getElementById("configuration")) {
    const root = createRoot(document.getElementById("configuration"));
    root.render(<Configuration />);
}

if (document.getElementById("login")) {
    const root = createRoot(document.getElementById("login"));
    root.render(<Login />);
}

//Ecole------------------------------------

if (document.getElementById("accueil")) {
    const root = createRoot(document.getElementById("accueil"));
    root.render(<HomeEcole />);
}

if (document.getElementById("activites")) {
    const root = createRoot(document.getElementById("activites"));
    root.render(<Activites />);
}

if (document.getElementById("details_activite")) {
    const root = createRoot(document.getElementById("details_activite"));
    root.render(<DetailsActivite />);
}

if (document.getElementById("formation")) {
    const root = createRoot(document.getElementById("formation"));
    root.render(<Formation />);
}

if (document.getElementById("dashboard")) {
    const root = createRoot(document.getElementById("dashboard"));
    root.render(<Dashboard onlinepage={onlinepage} />);
}

//Departements---------------------------------------------

if (document.getElementById("departements")) {
    const root = createRoot(document.getElementById("departements"));
    root.render(<Liste onlinepage={onlinepage} />);
}

if (document.getElementById("details_departement")) {
    const root = createRoot(document.getElementById("details_departement"));
    root.render(<Details onlinepage={onlinepage} />);
}

if (document.getElementById("add_departement")) {
    const root = createRoot(document.getElementById("add_departement"));
    root.render(<Add onlinepage={onlinepage} />);
}

//Filieres---------------------------------------------
if (document.getElementById("filieres")) {
    const root = createRoot(document.getElementById("filieres"));
    root.render(<ListeFiliere onlinepage={onlinepage} />);
}

if (document.getElementById("details_filiere")) {
    const root = createRoot(document.getElementById("details_filiere"));
    root.render(<DetailsFiliere onlinepage={onlinepage} />);
}

if (document.getElementById("add_filiere")) {
    const root = createRoot(document.getElementById("add_filiere"));
    root.render(<AddFiliere onlinepage={onlinepage} />);
}

if (document.getElementById("enseignements")) {
    const root = createRoot(document.getElementById("enseignements"));
    root.render(<Enseignements onlinepage={onlinepage} />);
}
