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

function App() {
    const [user, setUser] = useState("");
    return <div></div>;
}

export default App;

if (document.getElementById("home")) {
    const root = createRoot(document.getElementById("home"));
    root.render(<Home />);
}

if (document.getElementById("results")) {
    const root = createRoot(document.getElementById("results"));
    root.render(<SearchResults />);
}

if (document.getElementById("register")) {
    const root = createRoot(document.getElementById("register"));
    root.render(<Signin />);
}
if (document.getElementById("login")) {
    const root = createRoot(document.getElementById("login"));
    root.render(<Login />);
}

if (document.getElementById("dashboard")) {
    const root = createRoot(document.getElementById("dashboard"));
    root.render(<Dashboard />);
}

if (document.getElementById("departements")) {
    const root = createRoot(document.getElementById("departements"));
    root.render(<Liste />);
}

if (document.getElementById("details_departements")) {
    const root = createRoot(document.getElementById("details_departements"));
    root.render(<Details />);
}

if (document.getElementById("add_departement")) {
    const root = createRoot(document.getElementById("add_departement"));
    root.render(<Add />);
}

if (document.getElementById("enseignements")) {
    const root = createRoot(document.getElementById("enseignements"));
    root.render(<Enseignements />);
}

if (document.getElementById("configuration")) {
    const root = createRoot(document.getElementById("configuration"));
    root.render(<Configuration />);
}
