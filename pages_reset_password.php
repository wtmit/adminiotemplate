<?php include './header.php'; ?>
<main class="d-flex w-100 h-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">
                    <div class="text-center mt-4">
                        <h1 class="h2">Reset password</h1>
                        <p class="lead">
                            Enter your email to reset your password.
                        </p>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
                                    </div>
                                    <div class="text-center mt-3">
                                        <a href="index.html" class="btn btn-lg btn-primary">Reset password</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="js/app.js"></script><div class="notyf"></div><div class="notyf-announcer" aria-atomic="true" aria-live="polite" style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; width: 1px; outline: 0px;"></div>
<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        setTimeout(function () {
            if (localStorage.getItem('popState') !== 'shown') {
                window.notyf.open({
                    type: "success",
                    message: "Get access to all 500+ components and 45+ pages with AdminKit PRO. <u><a class=\"text-white\" href=\"https://adminkit.io/pricing\" target=\"_blank\">More info</a></u> 🚀",
                    duration: 10000,
                    ripple: true,
                    dismissible: false,
                    position: {
                        x: "left",
                        y: "bottom"
                    }
                });

                localStorage.setItem('popState', 'shown');
            }
        }, 15000);
    });
</script>
<div class="settings js-settings">
    <div class="settings-toggle js-settings-toggle">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders align-middle"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>
    </div>
    <div class="settings">
        <div class="settings-panel">
            <div class="settings-content">
                <div class="settings-title">
                    <button type="button" class="btn-close btn-close-white float-end js-settings-toggle" aria-label="Close"></button>
                    <h4 class="mb-0 d-inline-block">Settings</h4>
                    <span class="badge bg-primary ms-2 text-uppercase">Pro</span>
                </div>
                <div class="settings-options">
                    <div class="alert alert-primary" role="alert">
                        <div class="alert-message">
                            <strong>Customize</strong> sidebar position, color scheme and layout type.
                        </div>
                    </div>
                    <div class="mb-3">
                        <small class="d-block text-uppercase font-weight-bold text-muted mb-2">Color scheme</small>
                        <div class="form-check form-switch mb-1">
                            <input type="radio" class="form-check-input" name="theme" value="default" id="themeDefault" checked="" />
                            <label class="form-check-label" for="themeDefault">Default</label>
                        </div>
                        <div class="form-check form-switch mb-1">
                            <input type="radio" class="form-check-input" name="theme" value="colored" id="themeColored" checked="" />
                            <label class="form-check-label" for="themeColored">Colored</label>
                        </div>
                        <div class="form-check form-switch mb-1">
                            <input type="radio" class="form-check-input" name="theme" value="dark" id="themeDark" />
                            <label class="form-check-label" for="themeDark">Dark</label>
                        </div>
                        <div class="form-check form-switch mb-1">
                            <input type="radio" class="form-check-input" name="theme" value="light" id="themeLight" />
                            <label class="form-check-label" for="themeLight">Light</label>
                        </div>
                    </div>
                    <hr />
                    <div class="mb-3">
                        <small class="d-block text-uppercase font-weight-bold text-muted mb-2">Layout</small>
                        <div class="form-check form-switch mb-1">
                            <input type="radio" class="form-check-input" name="layout" value="fluid" id="layoutFluid" checked="" />
                            <label class="form-check-label" for="layoutFluid">Fluid</label>
                        </div>
                        <div class="form-check form-switch mb-1">
                            <input type="radio" class="form-check-input" name="layout" value="boxed" id="layoutBoxed" />
                            <label class="form-check-label" for="layoutBoxed">Boxed</label>
                        </div>
                    </div>
                    <hr />
                    <div class="mb-3">
                        <small class="d-block text-uppercase font-weight-bold text-muted mb-2">Sidebar position</small>
                        <div class="form-check form-switch mb-1">
                            <input type="radio" class="form-check-input" name="sidebarPosition" value="left" id="sidebarLeft" checked="" />
                            <label class="form-check-label" for="sidebarLeft">Left</label>
                        </div>
                        <div class="form-check form-switch mb-1">
                            <input type="radio" class="form-check-input" name="sidebarPosition" value="right" id="sidebarRight" />
                            <label class="form-check-label" for="sidebarRight">Right</label>
                        </div>
                    </div>
                    <hr />
                    <div class="mb-3">
                        <small class="d-block text-uppercase font-weight-bold text-muted mb-2">Sidebar layout</small>
                        <div class="form-check form-switch mb-1">
                            <input type="radio" class="form-check-input" name="sidebarLayout" value="default" id="sidebarDefault" checked="" />
                            <label class="form-check-label" for="sidebarDefault">Default</label>
                        </div>
                        <div class="form-check form-switch mb-1">
                            <input type="radio" class="form-check-input" name="sidebarLayout" value="compact" id="sidebarCompact" />
                            <label class="form-check-label" for="sidebarCompact">Compact</label>
                        </div>
                    </div>
                    <div class="d-grid gap-2 mb-3">
                        <a href="#" class="btn btn-outline-primary btn-lg js-settings-reset">Reset to Default</a>
                        <a href="https://adminkit.io/pricing" target="_blank" class="btn btn-primary btn-lg">Purchase Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg>
<?php include './footer.php'; ?>