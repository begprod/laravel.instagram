<template>
    <div>
        <button class="btn btn-primary ml-5" @click="followUser" v-text="buttonText">Follow</button>
    </div>
</template>

<script>
    export default {
    	props: ['userId', 'follows'],

        data: function() {
    		return {
    			status: this.follows
            }
        },

        computed: {
    		buttonText() {
    			return (this.status) ? 'Unfollow' : 'Follow';
            }
        },

    	methods: {
    		followUser() {
    			axios.post('/follow/' + this.userId)
                    .then(response => {
                    	this.status = !this.status;
                    	console.log(response);
                    })
                    .catch(errors => {
                    	if(errors.response.status === 401) {
                    		window.location = '/login';
                        }
                    });
            }
        }
    }
</script>
