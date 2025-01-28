import { SaasExpertiseType } from 'src/types';
import { AzureIcon } from 'src/assets/icons/AzureIcon';
import { ExpressIcon } from 'src/assets/icons/ExpressIcon';
import { AwsIcon } from 'src/assets/icons/AwsIcon';
import { GoogleCloudIcon } from 'src/assets/icons/GoogleCloudIcon';
import { MongoDbIcon } from 'src/assets/icons/MongoDbIcon';
import { NodeJsIcon } from 'src/assets/icons/NodeJsIcon';
import { ReactIcon } from 'src/assets/icons/ReactIcon';

export const SAAS_EXPERTISE: SaasExpertiseType = {
  id: 'saas_expertise',
  title: 'Tap into our SaaS development expertise',
  description:
    'We know SaaS development inside and out. We can help you build solutions using scalable multi-tenant architectures, optimal cloud strategies, and modern technology stack.',
  features: [
    {
      id: 'multi',
      title: 'Multi-tenant architecture',
    },
    {
      id: 'devops',
      title: 'DevOps and automation',
    },
    {
      id: 'mern',
      title: 'MERN tech stack',
    },
    {
      id: 'aws',
      title: 'AWS, Azure, and Google Cloud',
    },
  ],
  logos: [
    {
      id: 'mongodb',
      icon: <MongoDbIcon />,
      className: 'w-[93px] h-9 mb-0 lg:mb-[11px] lg:w-[130px] lg:h-[50px]',
    },
    {
      id: 'express',
      icon: <ExpressIcon />,
      className: 'w-[92px] h-[21px] mt-3.5 lg:mt-1.5 lg:w-32 lg:h-[29px]',
    },
    {
      id: 'react',
      icon: <ReactIcon />,
      className: 'w-[109px] h-[35px] -mb-1 lg:mb-0 lg:w-[153px] lg:h-[51px]',
    },
    {
      id: 'nodejs',
      icon: <NodeJsIcon />,
      className: 'w-[81px] h-[23px] mb-0 lg:mb-2 lg:w-[138px] lg:h-10',
    },
    {
      id: 'aws',
      icon: <AwsIcon />,
      className: 'w-12 h-[29px] mt-2.5 lg:mt-[18px] lg:w-[77px] lg:h-[46px]',
    },
    {
      id: 'azure',
      icon: <AzureIcon />,
      className: 'w-[82px] h-6 lg:w-[114px] lg:h-[34px]',
    },
    {
      id: 'googlecloud',
      icon: <GoogleCloudIcon />,
      className: 'w-[84px] h-10 lg:w-[117px] lg:h-14',
    },
  ],
};
