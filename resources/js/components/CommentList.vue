<template>
    <div class="col">
        <div class="card">
            <div :class="cardBodyHeader">
                <p class="text-center">{{ comment.name }}</p>
            </div>
            <div :class="cardBodyColor">
                <div :class="cardEmailBody">
                    <h5 class="text-center">{{ comment.email }}</h5>
                </div>
                <div :class="cardCommentBody">
                    <p class="text-center">{{ comment.comment }}</p>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "CommentList",
    props: {
        comment: Object,
        iteration: Number
    },
    computed: {
        cardBodyColor() {
            if (this.iteration % 2) {
                return 'card-body background-green';
            } else {
                return 'card-body background-grey';
            }
        },
        cardBodyHeader() {
            if (this.iteration % 2) {
                return 'comment-avtor-green';
            } else {
                return 'comment-avtor-gray';
            }
        },
        cardEmailBody() {
            if (this.iteration % 2) {
                return 'row comment-email-gren';
            } else {
                return 'row comment-email-gray';
            }
        },
        cardCommentBody() {
            if (this.iteration % 2) {
                return 'row comment-text-green';
            } else {
                return 'row comment-text-gray';
            }
        }
    }
}
</script>

<style scoped>
.background-grey {
    background-color: rgb(233, 238, 243);
    color: rgb(113, 119, 127);
}
.background-green {
    background-color: rgb(222, 235, 222);
    color: rgb(144, 156, 143);
}

</style>
