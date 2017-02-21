<template>
        <li class="dropdown hidden-xs">
            <a href="#" class="dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="true">
                <i class="icon-bell"></i> 
                <span class="badge badge-xs badge-danger" v-if="unreadNotifications.length">
                    {{ unreadNotifications.length }}
                </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg">
                <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                <li class="list-group nicescroll notification-list">
                <a href="/panel/school/requests" class="list-group-item">
                   <div class="media">
                      <div class="pull-left p-r-10">
                         <em class="fa fa-user-plus fa-2x text-info"></em>
                      </div>
                      <div class="media-body">
                         <h5 class="media-heading">Ειδοποίηση για σύνδεση</h5>
                         <p class="m-0">
                             <small v-if="unreadNotifications">{{ unreadNotifications.length }} αιτήματα</small>
                         </p>
                      </div>
                   </div>
                </a>
                </li>
                <li>
                    <a href="/panel/school/requests" class="list-group-item text-right">
                        <small class="font-600">See all notifications</small>
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
                    this.listen()
                    this.listenOnStudentToSchoolConnection()
            },

            listen: function(){
              if(window.AuthRole == 'school'){
                // console.log('PPPPP')
                this.listenOnStudentToSchoolConnection()
              }
            },

            listenOnStudentToSchoolConnection: function(){
                var pusher = new Pusher('943717bf5769e7b902b4', {
                  cluster: 'eu',
                  encrypted: true
                });

                var channel = pusher.subscribe('school.' + window.Connection);
                channel.bind('App\\Events\\UserAppliedOnSchool', function(data) {
                  console.log('test')
                  this.getNotifications();
                }.bind(this));
            }
        },

        mounted() {
            console.log('Notifications Component ready.')

            this.getNotifications()
            Event.$on('readNotifications', () =>
              this.getNotifications()
            )
        }
    }
</script>
