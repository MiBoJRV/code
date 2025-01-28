import { TestimonialType } from 'src/types';
import { formatImgResponse } from 'src/helpers';
import { ClarityStackIcon } from 'src/assets/icons/ClarityStackIcon';
import provefaClientPhoto from 'src/assets/images/provefa_client_photo.png?w=768;1024;2000&format=webp';
import frFlagImg from 'src/assets/images/france_flag.png?w=768;1024;2000&format=webp';

export const TESTIMONIAL_DATA: TestimonialType = {
  id: 1,
  quote:
    'Excellent collaboration again on this project. The team went out and about to deliver an outstanding result, highly recommended!',
  client: {
    photo: formatImgResponse(provefaClientPhoto),
    name: 'Baptiste Hediard',
    company: 'CTO, Provefa, Le Vésinet',
    countryFlag: formatImgResponse(frFlagImg),
  },
};

export const TESTIMOMIALS_CONFIG: TestimonialType[] = [
  TESTIMONIAL_DATA,
  {
    ...TESTIMONIAL_DATA,
    id: 2,
    companyIcon: <ClarityStackIcon className="w-44 h-14 lg:w-64 lg:h-20" />,
  },
  { ...TESTIMONIAL_DATA, id: 3 },
  { ...TESTIMONIAL_DATA, id: 4 },
  { ...TESTIMONIAL_DATA, id: 5 },
];
