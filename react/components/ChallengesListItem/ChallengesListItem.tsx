import React from 'react';
import cn from 'classnames';
import { CheckedCheckboxIcon } from 'src/assets/icons';
import { ChallengeType } from 'src/types';

type ChallengesListItemProps = {
  className?: string;
} & ChallengeType;

export const ChallengesListItem: React.FC<ChallengesListItemProps> = ({
  title,
  className = '',
}): JSX.Element => (
  <li
    className={cn(
      'flex items-start mb-6 last:mb-0 lg:text-center lg:justify-center xl:items-center lg:mb-10',
      className
    )}
  >
    <div className="pt-1 pr-3 lg:pr-7 lg:pt-2 xl:pt-0 ">
      <CheckedCheckboxIcon className="w-6 h-6 lg:w-[35px] lg:h-[35px]" />
    </div>
    {title}
  </li>
);
