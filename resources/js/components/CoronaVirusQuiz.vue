<template>
  <div class="col-12 mb-4">
    <h2 class="text-center">{{ $t('covid19.test_header')}}</h2>
    <div class="text-center p-4" v-if="introStage" ref="formContainer" style="min-height: 16em;">
      <p>{{ $t('covid19.test_p')}}</p>
      <p>{{ $t('covid19.test_p2')}}</p>
      <button class="btn btn-unique" @click.prevent="startQuiz">{{ $t('covid19.btn_start')}}</button>
    </div>
    <div class="row d-flex justify-content-center" v-if="questionStage">
      <div class="col-sm-6 m-4">
        <div class="text-center card" style="min-height: 14em;" ref="formContainer">
          <div class="card-body p-4">
            <h5 class="font-weight-bold">{{ currentQuestion.text }}</h5>

            <div class="m-4" v-if="currentQuestion.type === 'tf'">
              <div class="btn-group-toggle" data-toggle="buttons" v-radio="answer">
                <label class="btn btn-outline-unique mb-2" @click.prevent="handleAnswer">
                  <input type="radio" name="options" id="option1" value="t" />
                  {{currentQuestion.strinOptions[0]}}
                </label>
                <label class="btn btn-outline-unique mb-2" @click.prevent="handleAnswer">
                  <input type="radio" name="options" id="option2" value="f" />
                  {{currentQuestion.strinOptions[1]}}
                </label>
              </div>
            </div>

            <div v-if="currentQuestion.type === 'mcmr'">
              <div v-for="(mcanswer,index) in currentQuestion.answers" :key="index">
                <div class="custom-control custom-checkbox mr-sm-2">
                  <input
                    type="checkbox"
                    name="mcmr"
                    class="custom-control-input"
                    :id="'answer'+index"
                    v-model="answerMulti"
                    :value="mcanswer"
                  />
                  <label class="custom-control-label" :for="'answer'+index">{{mcanswer}}</label>
                </div>
              </div>
              <button
                class="btn btn-unique mt-2"
                @click.prevent="handleAnswer"
              >{{ $t('covid19.btn_confirmation')}}</button>
            </div>

            <div v-if="currentQuestion.type === 'mc'">
              <div v-for="(mcanswer,index) in currentQuestion.answers" :key="index">
                <input
                  @click.prevent="handleAnswer"
                  type="radio"
                  :id="'answer'+index"
                  name="currentQuestion"
                  v-model="answer"
                  :value="mcanswer"
                />
                <label :for="'answer'+index">{{mcanswer}}</label>
                <br />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center p-4" v-if="resultsStage" ref="formContainer" style="min-height: 16em;">
      <div v-if="perc<25">{{ $t('covid19.result_good')}}</div>
      <div v-if="perc>=25 &&perc <=55">{{ $t('covid19.result_med')}}</div>
      <div v-if="perc>55">{{ $t('covid19.result_bad')}}</div>
      <div class="m-4">
        <a href="tel:111" class="btn btn-unique mb-2" v-if="perc>=25">{{ $t('covid19.call111')}}</a>
        <a href="/tips" class="btn btn-unique mb-2">{{ $t('covid19.tips')}}</a>
        <button class="btn btn-unique mb-2" @click.prevent="startQuiz">{{ $t('covid19.new_test')}}</button>
      </div>
    </div>
  </div>
</template>




<script>
import radio from "../radio";
export default {
  directives: {
    radio: radio
  },
  components: {},
  mounted() {},

  data() {
    return {
      introStage: true,
      questionStage: false,
      resultsStage: false,

      questions: [
        {
          text: this.$t("covid19.q_fever"),
          type: "tf",
          strinOptions: [this.$t("covid19.yes"), this.$t("covid19.no")],
          correct: "t",
          sub: true,
          toNextMustBeCorrect: true,
          subQuestion: [
            {
              text: this.$t("covid19.q_time_fever"),
              type: "tf",
              strinOptions: [
                this.$t("covid19.two_less"),
                this.$t("covid19.two_more")
              ],
              correct: "f"
            },
            {
              text: this.$t("covid19.q_temperature"),
              type: "tf",
              strinOptions: [
                this.$t("covid19.less_39"),
                this.$t("covid19.to_39")
              ],
              correct: "f"
            }
          ]
        },
        {
          text: this.$t("covid19.q_old_preg"),
          type: "tf",
          strinOptions: [this.$t("covid19.yes"), this.$t("covid19.no")],
          correct: "t"
        },
        {
          text: this.$t("covid19.q_place_50"),
          type: "tf",
          strinOptions: [this.$t("covid19.yes"), this.$t("covid19.no")],
          correct: "t"
        },
        {
          text: this.$t("covid19.q_international_trip"),
          type: "tf",
          strinOptions: [this.$t("covid19.yes"), this.$t("covid19.no")],
          correct: "t"
        },
        {
          text: this.$t("covid19.q_approch"),
          type: "tf",
          strinOptions: [this.$t("covid19.yes"), this.$t("covid19.no")],
          correct: "t"
        },

        {
          text: this.$t("covid19.q_symptoms"),
          answers: [
            this.$t("covid19.s_coryza"),
            this.$t("covid19.s_stuffy_nose"),
            this.$t("covid19.s_tiredness"),
            this.$t("covid19.s_cough"),
            this.$t("covid19.s_shortness_of_breath"),
            this.$t("covid19.s_headache"),
            this.$t("covid19.s_body_aches"),
            this.$t("covid19.s_sore_throat"),
            this.$t("covid19.s_diarrhea"),
            this.$t("covid19.s_loss_of_smell"),
            this.$t("covid19.s_loss_of_taste")
          ],
          correct: [
            this.$t("covid19.s_coryza"),
            this.$t("covid19.s_tiredness"),
            this.$t("covid19.s_stuffy_nose"),
            this.$t("covid19.s_cough"),
            this.$t("covid19.s_body_aches"),
            this.$t("covid19.s_sore_throat"),
            this.$t("covid19.s_shortness_of_breath"),
            this.$t("covid19.s_loss_of_smell")
          ],
          type: "mcmr"
        },
        {
          text: this.$t("covid19.q_took_medicines"),
          type: "tf",
          strinOptions: [this.$t("covid19.yes"), this.$t("covid19.no")],
          correct: "t"
        }
      ],
      currentQuestion: null,
      currentCount: 0,
      allMadeQuestions: [],
      answers: [],
      answerMulti: [],
      answer: null,
      correct: 0,
      perc: null
    };
  },
  methods: {
    clear() {
      this.currentCount = 0;
      this.resultsStage = false;
      this.allMadeQuestions = [];
      this.answerMulti = [];
      this.answers = [];
      this.answer = null;
      this.correct = 0;
      this.perc = null;
    },
    startQuiz() {
      this.clear();
      let loader = this.$loading.show({
        color: "#880e4f",
        loader: "dots",
        container: this.$refs.formContainer,
        canCancel: false
      });
      setTimeout(() => {
        this.introStage = false;
        this.questionStage = true;
        this.currentQuestion = this.questions[this.currentCount];
        loader.hide();
      }, 500);
    },
    handleAnswer() {
      let loader = this.$loading.show({
        color: "#880e4f",
        loader: "dots",
        container: this.$refs.formContainer,
        canCancel: false
      });
      setTimeout(() => {
        let q = this.questions[this.currentCount];
        let qa = {
          inSub: this.currentQuestion,
          question: this.currentQuestion.text,
          correct: this.currentQuestion.correct,
          answer: this.answerMulti.length > 0 ? this.answerMulti : this.answer,
          type: this.currentQuestion.type
        };

        this.answers[this.allMadeQuestions.length] = qa.answer;
        this.allMadeQuestions[this.allMadeQuestions.length] = {
          question: qa.question,
          correct: qa.correct,
          type: qa.type
        };

        let controller = true;
        if (this.currentCount + 1 === this.questions.length) {
          this.handleResults();
          this.questionStage = false;
          this.resultsStage = true;
          controller = false;
        }

        if (
          (q.sub && q.toNextMustBeCorrect && qa.answer == qa.correct) ||
          (qa.inSub &&
            qa.question ==
              (q.subQuestion ? q.subQuestion.slice(-1)[0].text : "not_sub"))
        ) {
          q.subQuestion.forEach(element => {
            if (
              !this.allMadeQuestions.some(el => el.question == element.text)
            ) {
              this.currentQuestion = {
                inSub: true,
                text: element.text,
                type: element.type,
                strinOptions: element.strinOptions,
                correct: element.correct
              };
              controller = false;
            }
          });
        }
        if (controller) {
          this.currentCount++;
          this.currentQuestion = this.questions[this.currentCount];
        }

        this.answer = null;
        $(".btn").removeClass("active");
        loader.hide();
      }, 500);
    },
    handleResults() {
      let loader = this.$loading.show({
        color: "#880e4f",
        loader: "dots",
        container: this.$refs.formContainer,
        canCancel: false
      });
      setTimeout(() => {
        let extra = 0;
        this.allMadeQuestions.forEach((a, index) => {
          if (Array.isArray(this.answers[index]) && a.type == "mcmr") {
            let confirmed = this.answers[index].filter(element =>
              a.correct.includes(element)
            ).length;
            this.correct = this.correct + confirmed;

            extra = extra + this.answers[index].length;
          } else if (this.answers[index] === a.correct) this.correct++;
        });

        this.perc = (
          (this.correct / (this.allMadeQuestions.length - 1 + extra)) *
          100
        ).toFixed(2);

        loader.hide();
      }, 500);
    }
  },

  computed: {}
};
</script>