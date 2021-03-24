<template>
    <div>
        <div class="container background-black">

            <div class="row">

                <div class="col-sm-2 offset-sm-2 offset-md-3">
                    <p><img src="images/logo_big.png" alt="Honey Hunters logo"></p>
                </div>


            </div>

            <div class="row">

                <div class="col-xs-12">
                    <p align="center"><img src="images/contact_icon.png" alt="Honey Hunters logo"></p>
                </div>

            </div>
            <CreateComment :errors="errors"></CreateComment>

        </div>

        <div class="container top-buffer">

            <div class="row">
                <div class="col-sm-4 offset-sm-4">
                    <h4 class="text-center">Выводим комментарии</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <comment-list v-for="(comment, index) in comments" :key="comment.id" :comment="comment" :iteration="index"></comment-list>
            </div>

        </div>

        <div class="container background-black top-buffer">

            <div class="row">

                <div class="col-7 offset-sm-2 offset-md-2">
                    <p><img src="images/logo_small.png" alt="Honey Hunters logo"></p>
                </div>

                <div class="col-3">
                    <img src="images/vk_icon.png" alt="Vkontake icon">
                    <img src="images/facebook_icon.png" alt="Facebook icon">
                </div>

            </div>

        </div>
    </div>
</template>

<script>
import CommentList from '../components/CommentList'
import CreateComment from "../components/CreateComment";

export default {
    components: {
      CommentList, CreateComment
    },
    props: {
        comments: Array,
        errors: Object,
    },
    name: "Home"
}
</script>

<style scoped>
.card-columns {
    column-count: 4;
}
</style>
