import React from 'react';
import { EngagementOptionType } from 'src/types';
import { Heading3, Text1 } from 'src/ui-kit';

export const EngagementOptionsListItem: React.FC<EngagementOptionType> = ({
  icon,
  text,
  title,
}): JSX.Element => (
  <li className="relative w-full flex flex-col items-center even:justify-self-end odd:justify-self-start justify-center xs:px-1.5 mb-8 last:mb-0  xs:mb-0 lg:px-0 ">
    <div className="mb-8 xs:mb-3 lg:absolute lg:-top-20">{icon}</div>
    <Heading3 className="mb-8">{title}</Heading3>
    <Text1 fontSize="text-x2" className="mb-auto">
      {text}
    </Text1>
  </li>
);
