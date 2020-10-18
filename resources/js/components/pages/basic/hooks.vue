<template>
	<div>
		<h1 ref="myref">Hook tutorial...</h1>
		<p>My name is: {{name}}</p>
	</div>
</template>

<script type="text/javascript">
	export default {
		data(){
			return {
				name: 'Sadek'
			}
		},

		beforeCreate(){
			console.log(this.name)
		},
		created(){
			console.log('Data and other function is available but not html', this.name)
		},
		mounted(){
			console.log(this.$refs.myref)
		}
	}
</script>