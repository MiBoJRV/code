import React from 'react';
import { SaasFeatureType } from 'src/types';

export const SaasExpertiseListItem: React.FC<SaasFeatureType> = ({
  title,
}): JSX.Element => (
  <li className="flex items-center justify-center text-text-box-mob text-grey py-1 px-4 w-72 h-[83px] bg-warm-box-mob bg-no-repeat bg-center bg-contain justify-self-center xs:bg-warm-box xs:w-[183px] xs:odd:justify-self-end xs:even:justify-self-start lg:text-text-box lg:px-6 lg:py-2 lg:w-[309px] lg:h-[139px]">
    {title}
  </li>
);
