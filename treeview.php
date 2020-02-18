

<script>// Treeview Initialization
$(document).ready(function() {
  $('.treeview-colorful').mdbTreeview();
});
</script>
<div class="treeview-animated w-20 border mx-4 my-4">
  <h6 class="pt-3 pl-3">Folders</h6>
  <hr>
  <ul class="treeview-animated-list mb-3">
    <li class="treeview-animated-items">
      <a class="closed">
        <i class="fas fa-angle-right"></i>
        <span><i class="far fa-envelope-open ic-w mx-1"></i>Mail</span>
      </a>
      <ul class="nested">
        <li>
          <div class="treeview-animated-element"><i class="far fa-bell ic-w mr-1"></i>Offers
        </li>
        <li>
          <div class="treeview-animated-element"><i class="far fa-address-book ic-w mr-1"></i>Contacts
        </li>
        <li class="treeview-animated-items">
          <a class="closed"><i class="fas fa-angle-right"></i>
            <span><i class="far fa-calendar-alt ic-w mx-1"></i>Calendar</span></a>
          <ul class="nested">
            <li>
              <div class="treeview-animated-element"><i class="far fa-clock ic-w mr-1"></i>Deadlines
            </li>
            <li>
              <div class="treeview-animated-element"><i class="fas fa-users ic-w mr-1"></i>Meetings
            </li>
            <li>
              <div class="treeview-animated-element"><i class="fas fa-basketball-ball ic-w mr-1"></i>Workouts
            </li>
            <li>
              <div class="treeview-animated-element"><i class="fas fa-mug-hot ic-w mr-1"></i>Events
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="treeview-animated-items">
      <a class="closed">
        <i class="fas fa-angle-right"></i>
        <span><i class="far fa-folder-open ic-w mx-1"></i>Inbox</span>
      </a>
      <ul class="nested">
        <li>
          <div class="treeview-animated-element"><i class="far fa-folder-open ic-w mr-1"></i>Admin
        </li>
        <li>
          <div class="treeview-animated-element"><i class="far fa-folder-open ic-w mr-1"></i>Corporate
        </li>
        <li>
          <div class="treeview-animated-element"><i class="far fa-folder-open ic-w mr-1"></i>Finance
        </li>
        <li>
          <div class="treeview-animated-element"><i class="far fa-folder-open ic-w mr-1"></i>Other
        </li>
      </ul>
    </li>
    <li class="treeview-animated-items">
      <a class="closed">
        <i class="fas fa-angle-right"></i>
        <span><i class="far fa-gem mx-1"></i>Favourites</span>
      </a>
      <ul class="nested">
        <li>
          <div class="treeview-animated-element"><i class="fas fa-pepper-hot ic-w mr-1"></i>Restaurants
        </li>
        <li>
          <div class="treeview-animated-element"><i class="far fa-eye ic-w mr-1"></i>Places
        </li>
        <li>
          <div class="treeview-animated-element"><i class="fas fa-gamepad ic-w mr-1"></i>Games
        </li>
        <li>
          <div class="treeview-animated-element"><i class="fas fa-cocktail ic-w mr-1"></i>Coctails
        </li>
        <li>
          <div class="treeview-animated-element"><i class="fas fa-pizza-slice ic-w mr-1"></i>Food
        </li>
      </ul>
    </li>
    <li>
      <div class="treeview-animated-element"><i class="far fa-comment ic-w mr-1"></i>Notes
    </li>
    <li>
      <div class="treeview-animated-element"><i class="fas fa-cogs ic-w mr-1"></i>Settings
    </li>
    <li>
      <div class="treeview-animated-element"><i class="fas fa-desktop ic-w mr-1"></i>Devices
    </li>
    <li>
      <div class="treeview-animated-element"><i class="fas fa-trash-alt ic-w mr-1"></i>Deleted Items
    </li>
  </ul>
</div>

