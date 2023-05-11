import Dashboard from "../Dashboard";

function Sidebar({ actif }) {
    const links = [
        { name: "Dashboard", url: "/api/dashboard" },
        { name: "Départements", url: "/api/departements" },
        { name: "Filières", url: "/api/filieres" },
        { name: "Enseignements", url: "/api/cycles" },
        { name: "Activités", url: "/api/cycles" },
        { name: "Medias", url: "/api/cycles" },
        { name: "Configurations", url: "/api/cycles" },
    ];

    const linkList = links.map((link) => (
        <a href={link.url}>
            <li
                key={link.name}
                className="flex flex-row gap-3 h-fit p-2 rounded-l-full bg-gray"
            >
                <span className="my-auto">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                        className="h-6 w-6 my-auto fill-main-blue"
                    >
                        <path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm320 96c0-26.9-16.5-49.9-40-59.3V88c0-13.3-10.7-24-24-24s-24 10.7-24 24V292.7c-23.5 9.5-40 32.5-40 59.3c0 35.3 28.7 64 64 64s64-28.7 64-64zM144 176a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm-16 80a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64zM400 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                    </svg>
                </span>
                <span className="text-main-blue text-xl font-medium">
                    {link.name}
                </span>
            </li>
        </a>
    ));
    return (
        <div className="fixed top-[90px] bottom-0 grid gap-2 w-[20%] h-[90vh] bg-main-blue">
            <ul className="basis-2/3 flex flex-col gap-3 py-12 pl-12">                
                {linkList}
            </ul>
            <div className="basis-1/3 h-[50%] bg-main-darken flex flex-row gap-4 py-2 px-2 justify-center mt-20">
                <span className="bg-main-blue rounded-full p-2 my-auto">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 576 512"
                        className="h-5 w-6 my-auto fill-white"
                    >
                        <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                    </svg>
                </span>
                <span className="bg-main-blue rounded-full p-2 my-auto">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 192 512"
                        className="h-5 w-6 my-auto fill-white"
                    >
                        <path d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z" />
                    </svg>
                </span>
                <span className="bg-main-blue rounded-full p-2 my-auto">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                        className="h-5 w-6 my-auto fill-white"
                    >
                        <path d="M192 32c0 17.7 14.3 32 32 32c123.7 0 224 100.3 224 224c0 17.7 14.3 32 32 32s32-14.3 32-32C512 128.9 383.1 0 224 0c-17.7 0-32 14.3-32 32zm0 96c0 17.7 14.3 32 32 32c70.7 0 128 57.3 128 128c0 17.7 14.3 32 32 32s32-14.3 32-32c0-106-86-192-192-192c-17.7 0-32 14.3-32 32zM96 144c0-26.5-21.5-48-48-48S0 117.5 0 144V368c0 79.5 64.5 144 144 144s144-64.5 144-144s-64.5-144-144-144H128v96h16c26.5 0 48 21.5 48 48s-21.5 48-48 48s-48-21.5-48-48V144z" />
                    </svg>
                </span>
                <span className="bg-main-blue rounded-full p-2 my-auto">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                        className="h-5 w-6 my-auto fill-white"
                    >
                        <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                    </svg>
                </span>
            </div>
        </div>
    );
}

export default Sidebar;
