Nova.booting((Vue, router) => {
    Vue.component('index-generate-text', require('./components/IndexField'));
    Vue.component('detail-generate-text', require('./components/DetailField'));
    Vue.component('form-generate-text', require('./components/FormField'));
})
