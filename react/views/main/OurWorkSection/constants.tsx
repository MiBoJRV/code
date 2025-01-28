import { WorkCardType } from 'src/types';
import { formatImgResponse } from 'src/helpers';
import workOneImage from 'src/assets/images/work_1.png?w=768;1024;2000&format=webp';
import workTwoImage from 'src/assets/images/work_2.png?w=768;1024;2000&format=webp';
import workTheeFirstImage from 'src/assets/images/work_3_1.png?w=768;1024;2000&format=webp';
import workTheeSecondImage from 'src/assets/images/work_3_2.png?w=768;1024;2000&format=webp';

const centeredImgClasses =
  'absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4';

export const OUR_WORKS_CONFIG: WorkCardType[] = [
  {
    id: 1,
    title: 'GPT-3 Based Coaching Chatbot',
    imageOne: formatImgResponse(workOneImage),
    description:
      "We helped a startup in the change management space integrate OpenAI's GPT-3 to improve their intelligent coaching solution.",
    link: '#',
    imageOneClassName: `${centeredImgClasses} max-h-full w-auto`,
  },
  {
    id: 2,
    title: 'GPT-3 Based Coaching Chatbot',
    imageOne: formatImgResponse(workTwoImage),
    description:
      "We helped a startup in the change management space integrate OpenAI's GPT-3 to improve their intelligent coaching solution.",
    link: '#',
    imageOneClassName: `${centeredImgClasses} max-h-[88%] lg:max-h-[65%]`,
  },
  {
    id: 3,
    title: 'GPT-3 Based Coaching Chatbot',
    imageOne: formatImgResponse(workTheeFirstImage),
    imageTwo: formatImgResponse(workTheeSecondImage),
    description:
      "We helped a startup in the change management space integrate OpenAI's GPT-3 to improve their intelligent coaching solution.",
    link: '#',
    imageOneClassName:
      'absolute top-2/4 left-2/4 -translate-x-[40%] -translate-y-[55%] w-auto max-h-[60%] xs:max-h-[80%] lg:-translate-y-[65%]',
    imageTwoClassName:
      'absolute top-2/4 right-2/4 translate-x-[20%] -translate-y-[20%] w-auto max-h-[50%] -z-10 xs:max-h-[70%] lg:right-0 lg:translate-x-0 lg:max-h-[50%] lg:-left-[4%]',
  },
];
