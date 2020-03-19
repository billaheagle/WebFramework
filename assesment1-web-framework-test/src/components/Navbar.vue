<template>
	<div>
		<b-navbar toogleable="lg" type="dark" variant="success">
			<b-container>
				<b-navbar-brand href="#">Mealzers</b-navbar-brand>
				<b-navbar-toogle target="nav-collapse"></b-navbar-toogle>
				<b-collapse id="nav-collapse" is-nav>
					<b-navbar-nav class="ml-auto">
						<b-navbar-from>
							<b-form-input
								size="sm"
								class="mr-sm-2"
								placeholder="search for a meal"
								v-model="meal"
								></b-form-input>
							<b-button
								size="sm"
								class="my-2 my-sm-0"
								type="submit"
								@click.prevent="getMeal"
								>Search</b-button>
						</b-navbar-from>
						<b-nav-item-dropdown right>
							<template slot="button-content"><em>User</em></template>
							<b-dropdown-item href="#">Profile</b-dropdown-item>
							<b-dropdown-item href="#">Sign Out</b-dropdown-item>
						</b-nav-item-dropdown>
					</b-navbar-nav>
				</b-collapse>
			</b-container>
		</b-navbar>
	</div>
</template>
<script>
	export default {
		data() {
			return {
				meal: ''
			}
		},
		methods: {
			getMeal() {
				
			}
		}
	}
</script>