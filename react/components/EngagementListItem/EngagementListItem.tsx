import React from 'react';
import { EngagementType } from 'src/types';
import { Heading3, Text1 } from 'src/ui-kit';

export const EngagementListItem: React.FC<EngagementType> = ({
  icon,
  text,
  title,
}): JSX.Element => (
  <li className="relative w-full flex flex-col items-center justify-center px-7 mb-8 last:mb-0 xs:px-4 xs:mb-0 lg:px-0">
    <div className="mb-8 xs:mb-3 lg:absolute lg:-top-[20%]">{icon}</div>
    <Heading3 className="mb-8">{title}</Heading3>
    <Text1
      fontSize="text-x2-mob"
      fontSizeXs="xs:text-x2-mob"
      className="px-3 mt-auto lg:px-0 lg:h-[140px] "
    >
      {text}
    </Text1>
  </li>
);
