<template>
        <li class="dropdown hidden-xs">
            <a href="#" class="dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="true">
                <i class="icon-bell"></i> 
                <span class="badge badge-xs badge-danger" v-if="unreadNotifications.length">
                    {{ unreadNotifications.length }}
                </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg">
                <li class="notifi-title"><span class="label label-default pull-right"></span>Ειδοποιήσεις</li>
                <li class="list-group nicescroll notification-list">
                <a href="/panel/school/requests" class="list-group-item" v-if="unreadNotifications.length">
                   <div class="media">
                      <div class="pull-left p-r-10">
                         <em class="fa fa-user-plus fa-2x text-info"></em>
                      </div>
                      <div class="media-body"> 
                         <h5 class="media-heading">Ειδοποίηση για σύνδεση</h5>
                         <p class="m-0">
                             <small>{{ unreadNotifications.length }} αιτήματα</small>
                         </p>
                      </div>
                   </div>
                </a>
                </li>
                <li>
                    <div class="list-group-item text-right">
                        <small class="font-600" v-if="!unreadNotifications.length">Δεν υπάρχουν νεες ειδοποιησεις</small>
                    </div>
                    <a href="/panel/school/requests" class="list-group-item text-right" v-if="unreadNotifications.length">
                        <small class="font-600">Δείτε όλες τις ειδοποιησεις</small>
                    </a>
                </li>
            </ul>
        </li>
</template>

<script>
    export default {

        data: function() {
            return{
                unreadNotifications: {}
            }
        },

        methods: {
            getNotifications: function(){
                axios.get('/api/notifications')
                    .then(response => {
                        this.unreadNotifications = response.data['unread']
                    });
                }
            },

        mounted() {
            console.log('Notifications Component ready.')

            this.getNotifications()
        }
    }
</script>