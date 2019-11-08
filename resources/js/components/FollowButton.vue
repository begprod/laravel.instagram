<template>
    <div>
        <button class="btn btn-primary ml-5" @click="followUser">Follow</button>
    </div>
</template>

<script>
    export default {
    	props: ['userId'],

    	methods: {
    		followUser() {
    			axios.post('/follow/' + this.userId)
                    .then(response => {
                    	console.log(response);
                    });
            }
        }
    }
</script>
