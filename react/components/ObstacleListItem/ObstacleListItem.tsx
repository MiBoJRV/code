import React from 'react';
import { Text1 } from 'src/ui-kit';
import { ObstacleFeatureType } from 'src/types';

export const ObstacleListItem: React.FC<ObstacleFeatureType> = ({
  icon,
  text,
}): JSX.Element => (
  <li className="flex flex-col justify-start items-center w-full h-auto mb-12 last-of-type:mb-0 sm:w-[550px]  lg:w-[420px] lg:mb-0">
    <div className="mb-2 h-12 lg:mb-4">{icon}</div>
    <Text1 fontWeight="medium" className="!text-h5 lg:px-5 1xl::px-1">
      {text}
    </Text1>
  </li>
);
