import Menu from "../Menu";

function Configuration () {

    return (
        <div className="grid grid-flow-row gap-4">
            <div>
                <Menu />
            </div>
            <div className="grid gap-4 m-auto py-10 px-20 justify-center bg-white rounded-3xl border-t-4 border-main-blue">
                <h1 className="font-bold pb-8 text-center text-[22px]">Configurez vos enseignements</h1>
                <form method="POST">
                    <div className="grid mb-8">
                        <h3 className="text-[14px] text-main-blue">Quel Système éducatif?</h3>
                        <span className="text-text">Choisissez votre Système éducatif</span>
                        <div className="flex mt-2 gap-4">
                            <span className="bg-slate-200 px-8 py-2 rounded-full">Français FR</span>
                            <span className="border border-slate-200 px-8 py-2 rounded-full">Anglais US</span>
                            <span className="border border-slate-200 px-8 py-2 rounded-full">Anglais UK</span>
                        </div>
                    </div>
                    <div className="grid mb-8">
                        <h3 className="text-[14px] text-main-blue">Enseignements du système éducatif <span className="font-bold">Français FR</span></h3>
                        <span className="text-text">Choisissez vos enseignements(Plusieurs choix sont possibles)</span>
                        <div className="flex mt-2 gap-4">
                            <span className="bg-slate-200 px-8 py-2 rounded-full">Ens. Supérieur</span>
                            <span className="border border-slate-200 px-8 py-2 rounded-full">Ens. Secondaire</span>
                            <span className="border border-slate-200 px-8 py-2 rounded-full">Ens. Elémentaire</span>
                            <span className="border border-slate-200 px-8 py-2 rounded-full">Ens. Pré-Elémentaire</span>
                        </div>
                    </div>
                    <div className="grid mb-8">
                        <h3 className="text-[14px] text-main-blue">Cycles de l'<span className="font-bold">enseignement Supérieur</span></h3>
                        <span className="text-text">Choisissez vos cycles(Plusieurs choix sont possibles)</span>
                        <div className="flex mt-2 gap-4">
                            <span className="bg-slate-200 px-8 py-2 rounded-full">Licence 1</span>
                            <span className="bg-slate-200 px-8 py-2 rounded-full">Licence 2</span>
                            <span className="bg-slate-200 px-8 py-2 rounded-full">Licence 3</span>
                            <span className="border border-slate-200 px-8 py-2 rounded-full">Master 1</span>
                            <span className="border border-slate-200 px-8 py-2 rounded-full">Master 2</span>
                            <span className="border border-slate-200 px-8 py-2 rounded-full">Doctorat 1</span>
                            <span className="border border-slate-200 px-8 py-2 rounded-full">Doctorat 2</span>
                        </div>
                    </div>
                    <div className="mt-8">
                        <button
                            type="submit"
                            className="text-white bg-main-blue w-full px-4 py-3 rounded-full text-[18px] font-medium"
                        >
                            Enregistrer les configurations
                        </button>
                    </div>
                </form>
            </div>
        </div>
    );
}

export default Configuration;