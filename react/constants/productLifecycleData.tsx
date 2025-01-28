import { ProductLifecycleType } from 'src/types';
import { formatImgResponse } from '../helpers';
import workTheeFirstImage from 'src/assets/images/work_3_1.png?w=768;1024;2000&format=webp';
import workTheeSecondImage from 'src/assets/images/work_3_2.png?w=768;1024;2000&format=webp';
import workOneImage from 'src/assets/images/work_1.png?w=768;1024;2000&format=webp';
import workTwoImage from 'src/assets/images/work_2.png?w=768;1024;2000&format=webp';

const centeredImgClasses =
  'absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4';

export const SAAS_STARTUP_DATA: ProductLifecycleType = {
  id: 'saas_startup',
  title: 'Get your SaaS startup off the ground',
  description:
    'Create a product with a feature set that investors can get excited about\n' +
    '      and one that customers will love, all within a limited time frame and\n' +
    "      budget. Once you launch an MVP, we'll make improvements and expand\n" +
    '      functionality to serve your user needs even better.',
  features: [
    {
      id: 'product_discovery',
      text: 'Product discovery',
    },
    {
      id: 'prototyping',
      text: 'Prototyping',
    },
    {
      id: 'design',
      text: 'UI/UX design',
    },
    {
      id: 'development',
      text: 'MVP development',
    },
  ],
  caseStudy: {
    id: 1,
    title:
      'We Launched a Project Management Tool to Automate Business Processes',
    subTitle: 'CASE STUDY',
    imageOne: formatImgResponse(workTheeFirstImage),
    imageTwo: formatImgResponse(workTheeSecondImage),
    link: '#',
    imageOneClassName:
      'absolute top-2/4 left-1/2 -translate-x-[46%] -translate-y-[55%] w-auto max-h-[67%] xs:max-h-[92%] lg:max-h-[102%] lg:-translate-x-[50%] lg:-translate-y-[48%]',
    imageTwoClassName:
      'absolute top-2/4 right-2/4 translate-x-[18%] xs:translate-x-[13%] -translate-y-[20%] w-auto max-h-[55%] -z-10 xs:max-h-[71%] lg:right-0 lg:translate-x-0 lg:max-h-[74%] lg:-left-[2%]',
  },
};

export const SAAS_PRODUCT_DATA: ProductLifecycleType = {
  id: 'saas_product',
  title: 'Increase the value of your SaaS product',
  description:
    'Add new capabilities to your SaaS solution by integrating third-party seRrvices and databases.' +
    " We're experts in the field, with deep knowledge of external API documentation. We can seamlessly" +
    ' integrate external systems into your project.',
  features: [
    {
      id: 'Databases',
      text: 'Databases',
    },
    {
      id: 'payment_systems',
      text: 'Payment systems',
    },
    {
      id: 'gpt3',
      text: 'GPT-3',
    },
    {
      id: 'crm',
      text: 'CRM',
    },
    {
      id: 'iot',
      text: 'IoT',
    },
  ],

  caseStudy: {
    id: 2,
    title:
      'We Helped a Startup in the Change Management Space Integrate OpenAI’s GPT-3',
    subTitle: 'CASE STUDY',
    imageOne: formatImgResponse(workTwoImage),
    link: '#',
    imageOneClassName: `${centeredImgClasses} max-h-[88%] lg:max-h-[96%]`,
  },
};

export const SAAS_SOLUTION_DATA: ProductLifecycleType = {
  id: 'saas_solution',
  title: 'Avoid scalability problems',
  description:
    'Upgrade your outdated software using microservices or migrate it to the cloud – we can help you resolve ' +
    "scalability problems while enhancing your app's performance. Wetelo can re-engineer your solution to handle" +
    ' a growing number of users, adding new features as needed and incorporating innovative technologies.',
  features: [
    {
      id: 'tech_audit',
      text: 'Tech audit',
    },
    {
      id: 'refactoring',
      text: 'Refactoring',
    },
    {
      id: 're_architecture',
      text: 'Re-architecture',
    },
    {
      id: 're_engineering',
      text: 'Re-engineering',
    },
    {
      id: 'cloud_migration',
      text: 'Cloud migration',
    },
  ],
  caseStudy: {
    id: 3,
    title:
      'We Helped a Startup in the Change Management Space Integrate OpenAI’s GPT-3',
    subTitle: 'CASE STUDY',
    imageOne: formatImgResponse(workOneImage),
    link: '#',
    imageOneClassName: `${centeredImgClasses} max-h-full w-auto lg:max-h-[103%]`,
  },
};
