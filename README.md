# crudlaravelvue
CRUD Laravel + Vue JS
Add this lines of codes on resources/assets/routes.js:
```
//...
  	path: '/provinsi',
    redirect: '/provinsi/home',
  	component: layout('Default'),
    children: [
      {
        path: '/provinsi/home',
        components: {
          main: resolve => require(['./components/views/provinsi/provinsi.vue'], resolve),
          navbar: resolve => require(['./components/Navbar.vue'], resolve),
          sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
        },
        meta: {
          title: "Data Provinsi"
        }
      },
      {
        path: '/provinsi/form',
        components: {
          main: resolve => require(['./components/views/provinsi/form.vue'], resolve),
          navbar: resolve => require(['./components/Navbar.vue'], resolve),
          sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
        },
        meta: {
          title: "Data Provinsi"
        }
      },
      {
        path: '/provinsi/update/:id',
        components: {
          main: resolve => require(['./components/views/provinsi/form.vue'], resolve),
          navbar: resolve => require(['./components/Navbar.vue'], resolve),
          sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
        },
        meta: {
          title: "Data Provinsi"
        }
      },
    ]
  },
//...
```

Add this lines of codes to resources/assets/js/menu.js:
```
//...
  {
    name: 'Daerah',
    icon: 'fa fa-play-circle',
    childType: 'collapse',
    childItem: [
		{
			name: 'Provinsi',
			link: '/provinsi/home',
			icon: 'fa fa-angle-right'
		},
	]
  },
//... 
``` 
Add this lines of codes to resources/assets/js/components.js 
``` 
import TableProvinsi from './components/views/provinsi/table.vue'; 
``` 
