import VueRouter from 'vue-router';


let routes = [
	{
		path: '/',
		component: require('./views/Home')
	},
	{
		path: '/past',
		component: require('./views/Past')
	}
];
export default new VueRouter({
	routes
});