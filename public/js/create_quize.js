document.addEventListener('DOMContentLoaded', function() {
    const originalForm = document.querySelector('#originalForm');
    originalForm.onsubmit = function(e) {
        e.preventDefault();

        const quizTitle = document.querySelector('input[placeholder="عنوان کوویز"]').value;
        const questionCount = parseInt(document.querySelector('input[placeholder="تعداد سوالات "]').value, 10);
        const quizDuration = document.querySelector('input[placeholder="مدت زمان (دقیقه)"]').value;
        const quizType = document.querySelector('#quizType').value;

        if (!quizTitle || isNaN(questionCount) || !quizDuration || !quizType) {
            alert('لطفاً تمام فیلدها را پر کنید و مطمئن شوید که تعداد سوالات یک عدد است.');
            return;
        }

        originalForm.style.display = 'none';

        const questionForm = document.createElement('form');
        questionForm.action = "store";
        questionForm.method = 'post';
        questionForm.style.marginTop = '10px';

        const csrfInput = document.createElement('input');
        csrfInput.type = 'hidden';
        csrfInput.name = '_token';
        csrfInput.value = document.querySelector('meta[name="csrf-token"]').content;
        questionForm.appendChild(csrfInput);

        const titleInput = document.createElement('input');
        titleInput.type = 'hidden';
        titleInput.name = 'title';
        titleInput.value = quizTitle;
        questionForm.appendChild(titleInput);

        const countInput = document.createElement('input');
        countInput.type = 'hidden';
        countInput.name = 'count';
        countInput.value = questionCount;
        questionForm.appendChild(countInput);

        const durationInput = document.createElement('input');
        durationInput.type = 'hidden';
        durationInput.name = 'min';
        durationInput.value = quizDuration;
        questionForm.appendChild(durationInput);

        const scoreInput = document.createElement('input');
        scoreInput.type = 'hidden';
        scoreInput.name = 'score';
        scoreInput.value = document.querySelector('input[placeholder="امتیاز یا نمره کلی"]').value;
        questionForm.appendChild(scoreInput);

        const typeInput = document.createElement('input');
        typeInput.type = 'hidden';
        typeInput.name = 'type_quize';
        typeInput.value = quizType;
        questionForm.appendChild(typeInput);

        for (let i = 1; i <= questionCount; i++) {
            const questionDiv = document.createElement('div');
            questionDiv.className = 'custom-margin1';

            const questionInput = document.createElement('input');
            questionInput.type = 'text';
            questionInput.className = 'title-input_question custom-margin1';
            questionInput.placeholder = 'سوال ' + i;
            questionInput.name = 'questions[' + i + '][text]';
            questionDiv.appendChild(questionInput);

            if (quizType === 'multipleChoice') {
                for (let j = 1; j <= 4; j++) {
                    const optionInput = document.createElement('input');
                    optionInput.type = 'text';
                    optionInput.className = 'input_question custom-margin1';
                    optionInput.placeholder = 'گزینه ' + j;
                    optionInput.name = 'questions[' + i + '][options][' + j + ']';
                    questionDiv.appendChild(optionInput);
                }

                const correctOptionInput = document.createElement('input');
                correctOptionInput.type = 'text';
                correctOptionInput.className = 'input_question custom-margin1';
                correctOptionInput.placeholder = 'گزینه درست';
                correctOptionInput.name = 'questions[' + i + '][correct_option]';
                questionDiv.appendChild(correctOptionInput);

            }
            else if (quizType === 'trueFalse') {
                const trueOption = document.createElement('input');
                trueOption.type = 'radio';
                trueOption.className = 'form-check-input';
                trueOption.name = 'questions[' + i + '][correct_option]';
                trueOption.value = 'true';
                trueOption.id = 'trueOption' + i;

                const trueLabel = document.createElement('label');
                trueLabel.className = 'form-check-label';
                trueLabel.htmlFor = 'trueOption' + i;
                trueLabel.textContent = 'درست';

                const falseOption = document.createElement('input');
                falseOption.type = 'radio';
                falseOption.className = 'form-check-input';
                falseOption.name = 'questions[' + i + '][correct_option]';
                falseOption.value = 'false';
                falseOption.id = 'falseOption' + i;

                const falseLabel = document.createElement('label');
                falseLabel.className = 'form-check-label';
                falseLabel.htmlFor = 'falseOption' + i;
                falseLabel.textContent = 'غلط';

                const trueFalseContainer = document.createElement('div');
                trueFalseContainer.className = 'form-check form-check-inline';
                trueFalseContainer.appendChild(trueOption);
                trueFalseContainer.appendChild(trueLabel);
                trueFalseContainer.appendChild(falseOption);
                trueFalseContainer.appendChild(falseLabel);

                questionDiv.appendChild(trueFalseContainer);
            }

            questionForm.appendChild(questionDiv);
            if (quizType === 'multipleChoice' && i < questionCount) {
                const separator1 = document.createElement('br');
                questionForm.appendChild(separator1);
             }
        }

        const submitButton = document.createElement('button');
        submitButton.type = 'submit';
        submitButton.className = 'button';
        submitButton.textContent = 'ثبت سوالات';
        questionForm.appendChild(submitButton);

        document.querySelector('.container').appendChild(questionForm);
    };
});
