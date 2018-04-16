<template>
  <b-navbar toggleable="md" type="dark" variant="dark">
    <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
    <b-navbar-brand href="#">Mailer</b-navbar-brand>
    <b-collapse is-nav id="nav_collapse">
      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">
        <b-nav-item to="/create" right>New Task</b-nav-item>
        <b-nav-item to="/dashboard" right>Dashboard</b-nav-item>
        <b-nav-item-dropdown right>
          <template slot="button-content">
          <em>User</em>
          </template>
          <b-dropdown-item href="#">Signout</b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</template>

<script>
	export default {
		data() {
			return {

			}
		}
	}
</script>

<style></style>