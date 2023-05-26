import logo from "../../assets/OIP.jpeg";
import icon from "../../assets/chevron-right-solid.svg";
import message from "../../assets/message-solid.svg";

function Navbar() {
    const ecole = JSON.parse(localStorage.getItem('profil'));
    const onlinepage = () => {
        const url = new URL(`http://localhost:8000/api/ecole/`);
        url.searchParams.set('id', ecole.id);
        window.location.assign(url.toString());
    }
    return (
        <div className="z-50 h-[90px] sticky top-0 border-b border-[#d9d9d9] flex flex-row bg-white">
            <div className="flex flex-row w-[20%] px-4 py-2 border-r border-gray gap-4 justify-center">
                <div className="">
                    <img src={logo} alt="logo" className="h-16 w-16 object-cover rounded-full" />
                </div>
                <div className="grid m-0">
                    <h3 className="text-main-blue text-[28px] font-bold cursor-pointer" onClick={onlinepage}>{ecole.sigle.slice(0,4)}</h3>
                    <span className="text-slate-400 font-light text-[11px]">{ecole.ecole.slice(0,30)}</span>
                </div>
            </div>
            <div className="flex gap-7 w-[80%] px-4 py-2">
                <div className="bg-white rounded-full -ml-10 p-2 my-auto flex justify-center shadow-sm">
                    <img src={icon} alt="icon" className="h-4 w-4 my-auto" />
                </div>                
                <div className="flex flex-row gap-7 my-auto basis-1/3" >
                    <h4>Ecole</h4>
                    <h4>Emploi</h4>
                    <h4>Projet</h4>
                </div>
                <div className="flex flex-row gap-2 my-auto w-full justify-end">
                    <div className="border border-main-blue rounded-full p-2">
                        <img src={message} alt="message" className="h-4 w-4 my-auto" />
                    </div>
                    <div className="border border-main-blue rounded-full p-2" >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" className="h-4 w-4 my-auto fill-main-blue">
                            <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Navbar;