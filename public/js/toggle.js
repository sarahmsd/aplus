function toggleMenu(){
    let toggle = document.querySelector('.toggle');
    let sidebar = document.querySelector('.emploi-sidebar-left');
    let main = document.querySelector('.dashboard-emploi');
    toggle.classList.toggle('active')
    sidebar.classList.toggle('active')
    main.classList.toggle('active')

}

const menu_toggle = document.querySelector('.menu-toggle');
		const sidebar = document.querySelector('.emploi-sidebar-left');

		menu_toggle.addEventListener('click', () => {
			menu_toggle.classList.toggle('is-active');
			sidebar.classList.toggle('is-active');
		});