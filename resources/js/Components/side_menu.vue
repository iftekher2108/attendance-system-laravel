<script>
</script>

<template>
    <div>
        <ul class="menu rounded-box min-h-screen w-full">
            <li><Link :href="route('dashboard')">Dashboard</Link></li>

            <li>
                <details>
                    <summary>Parent</summary>
                        <li><Link :href="route('profile.edit')">Profile</Link></li>
                        <li><a>Submenu 2</a></li>
                        <li><a href="">name</a></li>
                </details>
            </li>

            <li>
                <details>
                    <summary>Parent</summary>
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                </details>
            </li>

            <li>
                <details>
                    <summary>Parent</summary>
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                </details>
            </li>

            <li>
                <details>
                    <summary>Parent</summary>
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                </details>
            </li>

            <li>
                <details>
                    <summary>Parent</summary>
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                </details>
            </li>

            <li> <a> System Settings</a></li>
        </ul>
    </div>
</template>
