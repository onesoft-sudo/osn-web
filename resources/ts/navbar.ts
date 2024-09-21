const NAVBAR_TOGGLE_ID = 'navbarToggle';
const NAVBAR_DRAWER_ID = 'navbarDrawer';
const NAVBAR_CLOSE_BUTTON_ID = 'navbarCloseButton';
const NAVBAR_OVERLAY = 'navbarOverlay';

export function configureNavbar() {
    const navbarToggle = document.getElementById(NAVBAR_TOGGLE_ID);
    const navbarDrawer = document.getElementById(NAVBAR_DRAWER_ID);
    const navbarCloseButton = document.getElementById(NAVBAR_CLOSE_BUTTON_ID);
    const navbarOverlay = document.getElementById(NAVBAR_OVERLAY);

    if (!navbarToggle || !navbarDrawer || !navbarCloseButton || !navbarOverlay) {
        console.debug('Navbar elements not found');
        return;
    }

    navbarToggle.addEventListener('pointerdown', () => {
        navbarDrawer.classList.toggle('navbar-drawer-visible');
        navbarOverlay.classList.toggle("hidden");
    });

    navbarCloseButton.addEventListener('pointerdown', () => {
        navbarDrawer.classList.remove('navbar-drawer-visible');
        navbarOverlay.classList.toggle("hidden");
    });

    navbarOverlay.addEventListener('pointerdown', () => {
        navbarDrawer.classList.remove('navbar-drawer-visible');
        navbarOverlay.classList.toggle("hidden");
    });
}
