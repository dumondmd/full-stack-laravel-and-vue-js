<template>
	<div>
		<h1>The number is: {{views}}</h1>
		<button @click="updateviews(1)">Increase</button>
		<button @click="updateviews(-1)">Decrease</button>
		
		<br><hr><br>

		<div v-for="(blog, i) in blogs" :key="i" v-if="blogs.length">
			<h1>{{blog.title}}</h1>
			<p>{{blog.post}}</p>
		</div>

		<br><hr><br>

		<div>
			<h1 v-if="showItem">Show this item if "showItem" is true</h1>
			<h1 v-else>Show this item if "showItem" is false</h1>
		</div>

		<button @click="changeShowItem()">change show Item</button>
	</div>
</template>

<script type="text/javascript">
	export default {
		data(){
			return {
				views : 0,
				blogs: [],
				showItem: false
			}
		},
		methods: {
			updateviews(number){
				this.views +=number
			},
			changeShowItem(){
				this.showItem = !this.showItem
			}
		},
		created(){
			// Call the serve to ger views of this blog post ...
			this.views = 100
			// Get the blog posts
			let posts = [
					{title: 'This is blog title 1', post: 'This is the blog post 1', id: 1},
					{title: 'This is blog title 2', post: 'This is the blog post 2', id: 2},
					{title: 'This is blog title 3', post: 'This is the blog post 3', id: 3},
					{title: 'This is blog title 4', post: 'This is the blog post 4', id: 4},
					{title: 'This is blog title 5', post: 'This is the blog post 5', id: 5},
					{title: 'This is blog title 6', post: 'This is the blog post 6', id: 6}
				]
			this.blogs = posts	
		}
	}	
</script>