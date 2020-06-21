<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        here is the message
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        created() {
            console.log('created');
        },
        mounted() {
            console.log('mounted');
        }
    }
</script>
