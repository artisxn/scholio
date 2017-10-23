<style>
    .dropdown{margin-right: -6px; }
    .dropdown-menu{padding-bottom: 0;}
    /*.dropdown-menu{box-shadow: 0 0 12px 2px #999; top: 65px; border-radius: 8px;}*/
    .media-body{padding-top: 8px}
    .media-body>h5:hover{color: #00bcd4}
    .media-heading{padding-bottom: 8px}


</style>

<template>
        <li class="dropdown hidden-xs">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <i class="icon-bell"></i> 
                <span class="badge badge-xs badge-danger" v-if="unreadNotifications.length">
                    {{ unreadNotifications.length }}
                </span>
            </a>

            <ul class="dropdown-menu dropdown-menu-lg" >
                <li class="notifi-title">
                    <span class="label label-default"></span>{{ lang('notifications.notifications') }}</li>
                <li class=" nicescroll notification-list">
                
                   <div v-if="scholarshipNot">
                   <a href="/panel/school/scholarships/request" class="list-group-item" v-if="unreadNotifications.length">
                      <div class="pull-left p-r-10">
                         <em class="fa fa-trophy fa-2x text-info"></em>
                      </div>
                      <div class="media-body" id="sch">
                         <h5 class="media-heading" v-if="scholarshipNot == 1"> {{ scholarshipNot }} {{ lang('notifications.scholarshipRequest') }}</h5>
                         <h5 class="media-heading" v-else>{{ scholarshipNot }} {{ lang('notifications.scholarshipRequests') }}</h5>
                      </div>
                    </a> 
                   </div>

                   <div v-if="connectionNot">
                   <a href="/panel/school/requests" class="list-group-item" v-if="unreadNotifications.length">
                      <div class="pull-left p-r-10">
                         <em class="fa fa-link fa-2x text-info"></em>
                      </div>
                      <div class="media-body">
                         <h5 class="media-heading" v-if="connectionNot == 1">{{ connectionNot }} {{ lang('notifications.connectionRequest') }}</h5>
                         <h5 class="media-heading" v-else>{{ connectionNot }} {{ lang('notifications.connectionRequests') }}</h5>
                      </div>
                    </a> 
                   </div>

                </li>
                <li v-if="!unreadNotifications.length">
                    <div class="list-group-item text-center">
                        <small class="font-600">{{ lang('notifications.noNotifications') }}</small>
                    </div>
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

        computed:{
          scholarshipNot: function(){
            var count = 0;
            if(this.unreadNotifications.length){
              this.unreadNotifications.forEach(function(item){
                if(item.type == 'App\\Notifications\\StudentAppliedOnScholarship'){
                  count++;
                }
              });
            }
            return count;
          },

          connectionNot: function(){
            var count = 0;
            if(this.unreadNotifications.length){
              this.unreadNotifications.forEach(function(item){
                if(item.type == 'App\\Notifications\\UserAppliedForConnection'){
                  count++;
                }
              });
            }
            return count;
          },
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
            this.getNotifications()
        }
    }


</script>