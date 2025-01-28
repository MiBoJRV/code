import React from 'react';
import { ApproachType } from 'src/types';
import { Heading5 } from 'src/ui-kit';

export const ApproachCard: React.FC<ApproachType> = ({
  text,
  icon,
}): JSX.Element => (
  <div className="flex flex-col justify-start items-center h-full">
    <div className="w-11 h-11 mb-4 lg:h-12 lg:w-12 lg:mb-9">{icon}</div>
    <Heading5 fontSize="text-text-box-mob" fontSizeLg="lg:text-h5">
      {text}
    </Heading5>
  </div>
);
